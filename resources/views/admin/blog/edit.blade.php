@extends('admin.layouts.app', ['title' => 'Articles | Editing'])

@php
  $inputs = [['name' => 'title', 'title' => 'Title', 'type' => 'text'], ['name' => 'author', 'title' => 'Author', 'type' => 'text'], ['name' => 'keywords', 'title' => 'Keywords', 'type' => 'text']];
@endphp

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Articles' => route('admin.panel.blogs.index'),
            'Editing' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Edit Article </h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.blogs.index') }}">
              Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>
          <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.panel.blogs.update', $blog->id) }}"
              class="row justify-content-center" method="post">
              @csrf
              @method('put')
              @foreach ($inputs as $item)
                <div class="mb-3 col-md-6">
                  <label for="{{ $item['name'] }}" class="form-label">{{ $item['title'] }}</label>
                  <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control"
                    id="{{ $item['name'] }}"
                    value="{{ old($item['name']) ? old($item['name']) : $blog->{$item['name']} }}">
                  @error($item['name'])
                    <div class="text-danger fs-7">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              @endforeach

              <div class="mb-3 col-md-6">
                <label for="photo" class="form-label">Image</label>
                <input type="file" name="photo" class="form-control" id="photo">
                <div class="text-info fs-7 mt-1">
                  {{ $blog->photo['relative_path'] }}
                </div>
                @error('photo')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="text" class="form-label">Text</label>
                <textarea name="text" class="form-control" id="text">{{ old('text') ? old('text') : $blog->text }}</textarea>
                @error('text')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                  {{ old('status') || (!request()->old() && $blog->status == 1) ? 'checked' : '' }}>
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
