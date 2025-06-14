@extends('admin.layouts.app', ['title' => 'Communication ways'])

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Communication ways' => '',
            ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Communication ways</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.contact.details.create') }}">
              Create
              <i class="bi bi-plus-circle"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="min-height: 40vh;">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>telegram</th>
                    <th>instagram</th>
                    <th>youtube</th>
                    <th>linkedin</th>
                    <th>github</th>
                    <th>Status</th>
                    <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td class="text-muted" style="min-width: 8rem">{{ $item->title }}</td>
                      <td class="text-muted" style="min-width: 15rem">{{ Illuminate\Support\Str::limit($item->description, 40) }}</td>
                      <td class="text-muted">{{ $item->email }}</td>
                      <td class="text-muted">{{ $item->phone_number }}</td>
                      <td class="text-muted">{{ $item->telegram }}</td>
                      <td class="text-muted">{{ $item->instagram }}</td>
                      <td class="text-muted">{{ $item->youtube }}</td>
                      <td class="text-muted">{{ $item->linkedin }}</td>
                      <td class="text-muted">{{ $item->github }}</td>
                      <td class="text-muted">{{ $item->status }}</td>

                      <td>
                        <div class="dropdown">
                          <button class="btn btn-light-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Operations
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                href="{{ route('admin.panel.contact.details.edit', ['detail' => $item->id]) }}">Edit</a>
                            </li>
                            <li>
                              <form action="{{ route('admin.panel.contact.details.destroy', ['detail' => $item->id]) }}" method="post"
                                id="form-{{ $loop->iteration }}">
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
                {{ $contacts->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<x-alert type='success'></x-alert>
<x-alert type='error'></x-alert>

