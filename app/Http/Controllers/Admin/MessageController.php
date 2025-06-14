<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MessageRequest;
use App\Mail\SendResponseEmail;
use App\Models\Message;
use App\Notifications\AdminHasMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('is_read') && $request->is_read >= 1)
            $messages = Message::where('is_read', true)->orderBy('created_at', 'desc')->paginate(5)->withQueryString();
        elseif($request->has('is_read') && $request->is_read == 0)
            $messages = Message::where('is_read', false)->orderBy('created_at', 'desc')->paginate(5)->withQueryString();
        else
            $messages = Message::orderBy('created_at', 'desc')->paginate(5)->withQueryString();
		return view('admin.message.index', compact('messages'));
    }

    public function store(MessageRequest $request)
    {
        $data = $request->except(['response', 'is_read']);
        $message = Message::create($data);
        Notification::send($message, new AdminHasMessage);
		return back()->with(['success' => 'Your message was successfully sent! Will be answered to your message soon.']);
    }

    public function show(Message $message)
    {
        $message->is_read ?: $message->update(['is_read' => true]);
		return view('admin.message.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back()->with(['success' => 'Removal Operation successfully carried out']);
    }

    public function sendResponse(Message $message, Request $request)
    {
        ini_set('max_execution_time', 600);

        $data = $request->validate([
            'response' => 'required',
        ]);

        if ($message->response != null) {
            return back()->with(['error' => 'You have already answered this message!']);
        }

        $this->sendResponseMail($message, $request);

        $message->update($data);
		return back()->with(['success' => 'Your reply was successfully sent!']);
    }

    private function sendResponseMail($message, $request)
    {
        try {
            Mail::to($message->email)->send(new SendResponseEmail('Reply to your message', $request->response));
        } catch (\Exception $e) {
            return back()->with(['error' => 'Your answer was not successfully sent!']);
        }
    }
}
