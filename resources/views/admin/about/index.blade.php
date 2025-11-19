@extends('admin.layouts.app', ['title' => 'Personal Information'])

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            '/ Personal Information' => '',
            ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Personal Information</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.about.personal.create') }}">
              Creating
              <i class="bi bi-plus-circle"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="min-height: 40vh;">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th class="family">lastname</th>
                    <th>Age</th>
                    <th>Nationality</th>
                    <th>Job</th>
                    <th>Address</th>
                    <th></th>
                    <th>Contact number</th>
                    <th>Github</th>
                    <th>Language</th>
                    <th>Resume file</th>
                    <th>Experience</th>
                    <th>Project</th>
                    <th>Prize</th>
                    <th>Status</th>
                    <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($abouts as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td class="text-muted">{{ $item->name }}</td>
                      <td class="text-muted">{{ $item->family }}</td>
                      <td class="text-muted">{{ $item->age }}</td>
                      <td class="text-muted">{{ $item->country }}</td>
                      <td class="text-muted mw-10">{{ $item->job }}</td>
                      <td class="text-muted mw-10">{{ $item->address }}</td>
                      <td class="text-muted">{{ $item->phone_number }}</td>
                      <td class="text-muted">{{ $item->email }}</td>
                      <td class="text-muted">{{ $item->github }}</td>
                      <td class="text-muted mw-10">{{ $item->language }}</td>
                      <td class="text-muted">{{ $item->resume_file['relative_path'] }}</td>
                      <td class="text-muted">{{ $item->experiences }}</td>
                      <td class="text-muted">{{ $item->projects }}</td>
                      <td class="text-muted">{{ $item->awards }}</td>
                      <td class="text-muted">{{ $item->status }}</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-light-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Operations
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item"
                                href="{{ route('admin.panel.about.personal.edit', ['personal' => $item->id]) }}">Edit</a>
                            </li>
                            <li>
                              <form action="{{ route('admin.panel.about.personal.destroy', ['personal' => $item->id]) }}" method="post"
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
                {{ $abouts->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<x-alert type='success'></x-alert>
<x-alert type='error'></x-alert>

@push('styles')
<style>
    .family {
        white-space: nowrap;
    }
    .mw-10 {
        min-width: 10rem;
    }
</style>
@endpush
