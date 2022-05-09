@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row font-inter">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-3">
                                <a href="javascript:void(0);" onclick="location.href='/dashboard/profile'"
                                    class="text-left mb-5">
                                    <p class="text-lg text-slate-800 hover:text-slate-700 font-bold flex items-center mr-5">
                                        <i class="fas fa-arrow-left pr-1"></i> Back
                                    </p>
                                </a>
                                <p class="mb-0 text-2xl font-semibold text-slate-700">Change Password</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/password/update" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row font-inter">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="current_password" class="form-control-label">Current Password</label>
                                        <input class="form-control @error('current_password') is-invalid @enderror"
                                            id="current_password" name="current_password" type="password">
                                        @error('current_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="form-control-label">New Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" type="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_confirmation" class="form-control-label">New Password
                                            Confirmation</label>
                                        <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                            id="password_confirmation" name="password_confirmation" type="password">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="javascript:void(0);"
                                    onclick="location.href='{{ url('dashboard/password/edit') }}'" class="font-inter">
                                    <button class="btn bg-gradient-info btn-sm"> Update
                                        Password</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
