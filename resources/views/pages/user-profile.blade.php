@extends('layouts.main')

@section('title') TVIP - Profile @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 bg-transparent">
                <div class="container text-center">
                    <h1 class="display-4">My Profile</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">My Store</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-store mr-2"></i>{{ Auth::user()->store_name }}</strong>
                            <p class="text-muted">{{ Auth::user()->address }}</p>
                            <hr>
                            <strong><i class="fas fa-phone mr-2"></i>{{ Auth::user()->phone }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle photo-profile" id="imageResult" src="{{ asset('img/users/'.Auth::user()->photo) }}" alt="photo" onerror="this.onerror=null;this.src='{{ asset('img/users/placeholder.jpg') }}';">
                            </div>
                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                            <p class="text-muted text-center">@foreach ( Auth::user()->getRoleNames() as $role ) {{ $role }} @endforeach</p>
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="input-group">
                                <div class="custom-file" id="customFile">
                                    <input type="file" class="custom-file-input" id="upload" aria-describedby="photoAddon" name="photo">
                                    <label class="custom-file-label" id="upload-label">Change Photo</label>
                                </div>
                            </div>
                            @error('photo')
                                <span class="text-danger text-sm">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control form-control-sm" id="name" value="{{ Auth::user()->name }}" name="name" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="example@tvip.com" value="{{ Auth::user()->email }}" name="email">
                                    @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password"  name="password" autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control form-control-sm" id="password-confirm" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
