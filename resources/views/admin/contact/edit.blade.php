@extends('admin.layouts.app', ['title' => 'Communication Ways | Editing'])

@php
  $inputs = [
      ['name' => 'title', 'title' => 'Title', 'type' => 'text'],
      ['name' => 'email', 'title' => 'Email', 'type' => 'text'],
      ['name' => 'phone_number', 'title' => 'Phone number', 'type' => 'text'],
      ['name' => 'telegram', 'title' => 'Telegram', 'type' => 'text'],
      ['name' => 'instagram', 'title' => 'Instagram', 'type' => 'text'],
      ['name' => 'youtube', 'title' => 'YouTube', 'type' => 'text'],
      ['name' => 'linkedin', 'title' => 'LinkedIn', 'type' => 'text'],
      ['name' => 'github', 'title' => 'GitHub', 'type' => 'text'],
  ];
@endphp

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Communication ways' => route('admin.panel.contact.details.index'),
            'Editing' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Editing a communication way</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.contact.details.index') }}">
              Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.panel.contact.details.update', $contact->id) }}" class="row justify-content-center" method="post">
              @csrf
              @method('put')
              @foreach ($inputs as $item)
                <div class="mb-3 col-md-6">
                  <label for="{{ $item['name'] }}" class="form-label">{{ $item['title'] }}</label>
                  <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control" id="{{ $item['name'] }}"
                    value="{{ old($item['name']) ? old($item['name']) : $contact->{$item['name']} }}">
                  @error($item['name'])
                    <div class="text-danger fs-7">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              @endforeach

              <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Description</label>
                  <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') ? old('description') : $contact->description }}</textarea>
                @error('description')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                {{ old('status') || !request()->old() && $contact->status == 1 ? 'checked' : '' }}>
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
