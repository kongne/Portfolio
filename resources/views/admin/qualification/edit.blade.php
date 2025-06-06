@extends('admin.layouts.app', ['title' => 'My Experience and Education Edit'])

@php
  $inputs = [['name' => 'period', 'title' => 'Period', 'type' => 'text'], ['name' => 'title', 'title' => 'Title', 'type' => 'text'], ['name' => 'descriptions', 'title' => 'Description', 'type' => 'text']];
@endphp

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'My experience and education' => route('admin.panel.about.qualifications.index'),
            'Edit' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Edit experience and education</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.about.qualifications.index') }}">
                Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.panel.about.qualifications.update', $qualification->id) }}"
              class="row justify-content-center" method="post">
              @csrf
              @method('put')
              @foreach ($inputs as $item)
                <div class="mb-3 col-md-6">
                  <label for="{{ $item['name'] }}" class="form-label">{{ $item['title'] }}</label>
                  <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control"
                    id="{{ $item['name'] }}"
                    value="{{ old($item['name']) ? old($item['name']) : $qualification->{$item['name']} }}">
                  @error($item['name'])
                    <div class="text-danger fs-7">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              @endforeach

              <div class="mb-3 col-md-6">
                <label class="form-label" for="status">Type</label>
                <select name="type" class="form-select form-select">
                    @foreach ($types as $type)
                        <option {{ old('type') == $type || (!request()->old() && $qualification->type == $type) ? 'selected' : '' }} value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
                @error('type')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                  {{ old('status') || !request()->old() && $qualification->status == 1 ? 'checked' : '' }}>
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
