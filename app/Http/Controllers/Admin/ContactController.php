<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(5);
		return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(ContactRequest $request)
    {
        $request['status'] = $request->has('status');

        $contact = Contact::create($request->all());
        disableAllStatus(Contact::class, $request->has('status'), $contact->id);
		return to_route('admin.panel.contact.details.index')->with(['success' => 'Created operations successfully carried out']);
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $request['status'] = $request->has('status');
        $contact->updateOrFail($request->all());
        disableAllStatus(Contact::class, $request->has('status'), $contact->id, true);
		return to_route('admin.panel.contact.details.index')->with(['success' => 'The editing operation was successfully carried out']);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

		return redirect()->back()->with(['success' => 'Removal Operation successfully carried out']);
    }
}
