@extends('admin.layouts.app', ['title' => 'My experience and education'])

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'My experience and education' => '',
            ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>My experience and education</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.about.qualifications.create') }}">
              ایجاد
              <i class="bi bi-plus-circle"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="min-height: 40vh;">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Period</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($qualifications as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td class="text-muted">{{ $item->period }}</td>
                      <td class="text-muted">{{ $item->name }}</td>
                      <td class="text-muted">{{ $item->descriptions }}</td>
                      <td class="text-muted">{{ $item->type }}</td>
                      <td class="text-muted">{{ $item->status }}</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-light-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Operations
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item"
                                href="{{ route('admin.panel.about.qualifications.edit', ['qualification' => $item->id]) }}">Edit</a>
                            </li>
                            <li>
                              <form action="{{ route('admin.panel.about.qualifications.destroy', ['qualification' => $item->id]) }}" method="post"
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
                {{ $qualifications->links() }}
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
</style>
@endpush
