@extends('admin.layouts.app', ['title' => 'Profile'])

@section('content')
  <div class="content p-2 p-lg-4">

    <div class="container-fluid">
      <div class="row">
        <x-breadcrumbs :routes="[
            'Admin panel' => route('admin.panel.dashboard'),
            'Profile' => '',
        ]"></x-breadcrumbs>
      </div>
      <div class="row">
        <div class="card">
          <div class="card-header">
            <h3>Profile editing</h3>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('admin.panel.profile.update') }}" class="row justify-content-center">
              @csrf
              @method('PUT')

              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">نام</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                  name="name" value="{{ old('name', auth()->user()->name) }}" required>

                @error('name')
                  <span class="invalid-feedback" role="alert"></span>
                  <strong>{{ $message }}</strong>
                @enderror
              </div>

                <div class="mb-3 col-md-6">
                    <label for="local_name" class="form-label">Demonstrated name</label>
                    <input id="local_name" type="text" class="form-control @error('local_name') is-invalid @enderror"
                           name="local_name" value="{{ old('local_name', auth()->user()->local_name) }}" required>

                    @error('local_name')
                    <span class="invalid-feedback" role="alert"></span>
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-12 row justify-content-center">
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                  name="email" value="{{ old('email', auth()->user()->email) }}" required>

                @error('email')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>
                </div>
              <button type="submit" class="btn btn-primary w-25">
                Profile editing
              </button>
            </form>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
            <h3>Code editing</h3>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('admin.panel.profile.change.password') }}"
              class="row justify-content-center">
              @csrf
              @method('PUT')

              <div class="col-12 row justify-content-center">
                <div class="mb-3 col-md-6">
                    <label for="current_password" class="form-label">Current password</label>
                    <input id="current_password" type="password"
                      class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>

                    @error('current_password')
                      <div class="text-danger fs-7">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="password" class="form-label">New password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required>

                @error('password')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="password_confirmation" class="form-label">Repeat the new password</label>
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                  name="password_confirmation" required>

                @error('password_confirmation')
                  <div class="text-danger fs-7">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-25">
                    Update
                  </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<x-alert type='success'></x-alert>
<x-alert type='error'></x-alert>
