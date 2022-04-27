@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row font-inter">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-3">
                                <p class="mb-0 text-2xl font-semibold text-slate-700">Edit My Profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/profile/update" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row font-inter">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username" class="form-control-label">Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" id="username"
                                            name="username" type="text"
                                            value="{{ old('username', Auth::user()->username) }}">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email Address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" type="email" value="{{ old('email', Auth::user()->email) }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                                            name="name" type="text" value="{{ old('name', Auth::user()->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday_date" class="form-control-label">Birthday Date</label>
                                        <input class="form-control @error('birthday_date') is-invalid @enderror"
                                            id="birthday_date" name="birthday_date" type="date"
                                            value="{{ old('birthday_date', Auth::user()->birthday_date) }}">
                                        @error('birthday_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" onclick="location.href='{{ url('dashboard/profile/edit') }}'"
                                class="font-inter">
                                <button class="btn bg-gradient-info btn-sm"> Edit
                                    Profile</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
