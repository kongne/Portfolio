@extends('admin.layouts.app', ['title' => 'Sample | Creating'])

@php
  $inputs = [['name' => 'title', 'title' => 'Title', 'type' => 'text'], ['name' => 'project_type', 'title' => 'Project type', 'type' => 'text'], ['name' => 'customer', 'title' => 'Customer', 'type' => 'text'], ['name' => 'link', 'title' => 'Project link', 'type' => 'text'], ['name' => 'technology', 'title' => 'Technology', 'type' => 'text']];
@endphp

@section('content')
  <div class="content p-2 p-lg-4">
    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Portfolio' => route('admin.panel.portfolios.index'),
            'Creating' => '',
        ]"></x-breadcrumbs>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3>Creating a sample </h3>
            <a class="btn btn-light-primary" href="{{ route('admin.panel.portfolios.index') }}">
              Return
              <i class="bi bi-arrow-90deg-left"></i>
            </a>
          </div>

          <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.panel.portfolios.store') }}"
              class="row justify-content-center" method="post">
              @csrf
              @foreach ($inputs as $item)
                <div class="mb-3 col-md-6">
                  <label for="{{ $item['name'] }}" class="form-label">{{ $item['title'] }}</label>
                  <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control"
                    id="{{ $item['name'] }}" value="{{ old($item['name']) }}">
                  @error($item['name'])
                    <div class="text-danger fs-7">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              @endforeach
              <div class="mb-3 col-md-6">
                <label for="featured_image" class="form-label">Image index</label>
                <input type="file" name="featured_image" class="form-control" id="featured_image">
                @error('featured_image')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="my-3 col-8 px-5 mx-auto">
                <div class="alert alert-info text-center">
                 Note: For your portfolio media, it is not mandatory to use the following media and you can only from the index image
                  Use!
                </div>
              </div>

              <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <button
                    class="nav-link {{ !session('media.has') ? 'active' : '' }}
                  {{ session("media.{$mediaTypes[1]}") ? 'active' : '' }}"
                    data-bs-toggle="tab" data-bs-target="#tab1" type="button">
                    Slide Media</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link {{ session("media.{$mediaTypes[2]}") ? 'active' : '' }}" data-bs-toggle="tab"
                    data-bs-target="#tab2" type="button">
                    Video Media</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link {{ session("media.{$mediaTypes[3]}") ? 'active' : '' }}" data-bs-toggle="tab"
                    data-bs-target="#tab3" type="button">Video Media (Upload in Apartments)</button>
                </li>
              </ul>

              <div class="tab-content mt-4">
                @error('media_type')
                  <div class="text-danger fs-7 my-2">
                    {{ $message }}
                  </div>
                @enderror

                {{-- tab1 --}}
                <div
                  class="tab-pane fade {{ !session('media.has') ? 'show active' : '' }}
                {{ session("media.{$mediaTypes[1]}") ? 'show active' : '' }}"
                  id="tab1">
                  <input type="hidden" name="media_type" value="{{ $mediaTypes[1] }}">

                  <div class="row justify-content-center">
                    @error('slider')
                      <div class="text-danger fs-7 text-center mb-3">
                        {{ $message }}
                      </div>
                    @enderror
                    @error('slider.*')
                      <div class="text-danger fs-7 text-center mb-3">
                        {{ $message }}
                      </div>
                    @enderror

                    <div class="mb-3 col-md-6">
                      <label for="slider" class="form-label">Image</label>
                      <input type="file" name="slider[]" class="form-control" id="slider">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="slider" class="form-label">Image</label>
                      <input type="file" name="slider[]" class="form-control" id="slider">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="slider" class="form-label">Image</label>
                      <input type="file" name="slider[]" class="form-control" id="slider">
                    </div>
                  </div>
                </div>

                {{-- tab2 --}}
                <div class="tab-pane fade {{ session("media.{$mediaTypes[2]}") ? 'show active' : '' }}" id="tab2">
                  <input type="hidden" name="media_type" value="{{ $mediaTypes[2] }}">

                  <div class="mb-3 col-md-6 mx-auto">
                    <label for="video" class="form-label">Video</label>
                    <input type="file" name="video" class="form-control" id="video">
                    @error('video')
                      <div class="text-danger fs-7">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                {{-- tab3 --}}
                <div class="tab-pane fade {{ session("media.{$mediaTypes[3]}") ? 'show active' : '' }}" id="tab3">
                  <input type="hidden" name="media_type" value="{{ $mediaTypes[3] }}">

                  <div class="mb-3 col-md-6 mx-auto">
                    <label for="video_link" class="form-label">Video</label>
                    <input type="file" name="video_link" class="form-control" id="video_link">
                    @error('video_link')
                      <div class="text-danger fs-7">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="my-3 form-check d-flex justify-content-center">
                <input type="checkbox" name="status" class="form-check-input me-2" id="status"
                  {{ old('status') ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Status</label>
              </div>
              @error('status')
                <div class="text-danger fs-7 text-center" style="margin: -1rem 0 1rem 0;">
                  {{ $message }}
                </div>
              @enderror

              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<x-alert type='error'></x-alert>

@push('scripts')
  <script>
    window.onload = function() {
      disableInputs();
      let inputs = document.querySelectorAll('.tab-pane.active *');
      enableInputs(inputs);

      let tabs = document.querySelectorAll('.nav-tabs .nav-link');
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', function() {
          disableInputs();
          let inputs = document.querySelectorAll('#tab' + (i + 1) + ' *');
          enableInputs(inputs);
        });
      }

      function disableInputs() {
        let inputs = document.querySelectorAll('.tab-content input');
        for (let i = 0; i < inputs.length; i++) {
          inputs[i].disabled = true;
        }
      }

      function enableInputs(inputs) {
        for (var i = 0; i < inputs.length; i++) {
          inputs[i].disabled = false;
        }
      }
    };
  </script>
@endpush
