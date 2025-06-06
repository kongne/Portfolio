@extends('admin.layouts.app', ['title' => 'Home | Edit'])

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Home' => route('admin.panel.home.index'),
            'Edit' => '',
            ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Home editing</h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.home.index') }}">
              Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.panel.home.update', ['home' => $home->id]) }}" class="row justify-content-center" method="post"
              enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') ? old('title') : $home->title }}">
                @error('title')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="subTitle" class="form-label">Substance</label>
                <input type="text" name="subTitle" class="form-control" id="subTitle" value="{{ old('subTitle') ? old('subTitle') : $home->sub_title }}">
                @error('subTitle')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description') ? old('description') : $home->description }}</textarea>
                @error('description')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="photo" class="form-label">Desktop image</label>
                <input class="form-control" name="photo" type="file" id="photo">
                <div class="text-info fs-7 mt-1">
                    {{ $home->photo['relative_path'] }}
                </div>
                @error('photo')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="mobilePhoto" class="form-label">Mobile Image</label>
                <input class="form-control" name="mobilePhoto" type="file" id="mobilePhoto">
                <div class="text-info fs-7 mt-1">
                    {{ $home->photo['mobile']['relative_path'] }}
                </div>
                @error('mobilePhoto')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                  {{ old('status') || !request()->old() && $home->status == 1 ? 'checked' : '' }}>
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
