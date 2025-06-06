@extends('admin.layouts.app', ['title' => 'My messages'])

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'My messages' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>My messages</h3>
            <div>
              <a href="{{ route('admin.panel.contact.messages.index', ['is_read' => true]) }}" class="btn btn-light-primary">Readed messages</a>
              <a href="{{ route('admin.panel.contact.messages.index', ['is_read' => false]) }}" class="btn btn-light-primary">Unread messages</a>
              <a href="{{ route('admin.panel.contact.messages.index') }}" class="btn btn-light-primary">All messages</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="min-height: 40vh;">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th>#</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Reading status</th>
                    <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($messages as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td class="text-muted">{{ $item->name }}</td>
                      <td class="text-muted">{{ $item->email }}</td>
                      <td class="text-muted">{{ $item->subject }}</td>
                      <td class="text-muted" style="min-width: 9rem;">{{ Illuminate\Support\Str::limit($item->message, 40) }}</td>
                      <td class="text-muted text-center text-md-start" style="min-width: 7.2rem;">{{ $item->is_read }}</td>

                      <td>
                        <div class="dropdown">
                          <button class="btn btn-light-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Operations
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                href="{{ route('admin.panel.contact.messages.show', ['message' => $item->id]) }}">View</a>
                            </li>
                            <li>
                              <form action="{{ route('admin.panel.contact.messages.destroy', ['message' => $item->id]) }}"
                                method="post" id="form-{{ $loop->iteration }}">
                                @csrf
                                @method('delete')
                                <a class="dropdown-item" href="javascript:"
                                  onclick="document.getElementById('form-{{ $loop->iteration }}').submit()">Remove</a>
                              </form>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="mt-3">
              {{ $messages->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<x-alert type='success'></x-alert>
<x-alert type='error'></x-alert>
