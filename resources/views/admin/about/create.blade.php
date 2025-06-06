@extends('admin.layouts.app', ['title' => 'Creating | Personal Information'])

@php
  $names = [
      ['name' => 'name', 'title' => 'Name', 'type' => 'text'],
      ['name' => 'family', 'title' => 'Last name', 'type' => 'text'],
      ['name' => 'age', 'title' => 'Age', 'type' => 'text'],
      ['name' => 'country', 'title' => 'Nationality', 'type' => 'text'],
      ['name' => 'job', 'title' => 'Job', 'type' => 'text'],
      ['name' => 'address', 'title' => 'Address', 'type' => 'text'],
      ['name' => 'phone_number', 'title' => 'Contact number', 'type' => 'text'],
      ['name' => 'email', 'title' => 'Email', 'type' => 'email'],
      ['name' => 'github', 'title' => 'Github username', 'type' => 'text'],
      ['name' => 'language', 'title' => 'Language', 'type' => 'text'],
      ['name' => 'experiences', 'title' => 'Experiences', 'type' => 'number'],
      ['name' => 'projects', 'title' => 'Projects', 'type' => 'number'],
      ['name' => 'awards', 'title' => 'Awards', 'type' => 'number'],
      ['name' => 'resume_file', 'title' => 'Resume file', 'type' => 'file'],
  ];
@endphp

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Personal Information' => route('admin.panel.about.personal.index'),
            'Creating' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Create personal information</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.about.personal.index') }}">
              Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.panel.about.personal.store') }}" class="row justify-content-center" method="post" enctype="multipart/form-data">
              @csrf
              @foreach ($names as $item)
                <div class="mb-3 col-md-6">
                  <label for="{{ $item['name'] }}" class="form-label">{{ $item['title'] }}</label>
                  <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control" id="{{ $item['name'] }}"
                    value="{{ old($item['name']) }}">
                  @error($item['name'])
                    <div class="text-danger fs-7">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              @endforeach

              <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                  {{ old('status') ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Status</label>
              </div>
              @error('status')
                <div class="text-danger fs-7 text-center" style="margin: -1rem 0 1rem 0;">
                  {{ $message }}
                </div>
              @enderror

              <button type="submit" class="btn btn-primary w-25">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
