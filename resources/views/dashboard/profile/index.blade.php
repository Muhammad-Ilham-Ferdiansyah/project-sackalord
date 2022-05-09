@extends('dashboard.layouts.main')

@section('container')
    <div class="w-full px-5">
        <h3 class="text-lg text-white">My Profile</h3>
    </div>
    <div class="card shadow-lg mx-4 mt-3 font-inter">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('storage/' . $users[0]->image) }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $users[0]->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ $users[0]->email }}
                        </p>
                    </div>
                    <div class="h-100">
                        <span class="mb-0 font-weight-thin text-sm">
                            Created at {{ $users[0]->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row font-inter">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-3">
                                <p class="mb-0 text-2xl font-semibold text-slate-700">My Profile</p>
                            </div>
                            <div class="col-md-4">
                                <a href="/dashboard/profile/edit">
                                    <button class="btn bg-gradient-info btn-sm"> Edit
                                        Profile</button>
                                </a>
                                <a href="javascript:void(0);"
                                    onclick="location.href='{{ url('/dashboard/password/edit') }}'">
                                    <button class="btn bg-gradient-secondary btn-sm"> Change Password</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success text-white mx-2" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        @foreach ($users as $user)
                            <div class="row font-inter">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username" class="form-control-label">Username</label>
                                        <input class="form-control" id="username" name="username" type="text"
                                            value="{{ $user->username }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email Address</label>
                                        <input class="form-control" id="email" name="email" type="email"
                                            value="{{ $user->email }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Full Name</label>
                                        <input class="form-control" id="name" name="name" type="text"
                                            value="{{ $user->name }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday_date" class="form-control-label">Birthday Date</label>
                                        <input class="form-control" id="birthday_date" name="birthday_date" type="date"
                                            value="{{ $user->birthday_date }}" readonly>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
