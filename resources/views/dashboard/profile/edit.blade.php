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
                                <p class="mb-0 text-2xl font-semibold text-slate-700">Edit My Profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/profile/update" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row font-inter">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Profile Image</label>
                                        <input type="hidden" name="oldImage" value="">
                                        @if ($users[0]->image)
                                            <img src="{{ asset('storage/' . $users[0]->image) }}"
                                                class="img-preview img-fluid mb-3 col-sm-5 rounded-xl">
                                        @else
                                            <img class="img-preview img-fluid mb-3 col-sm-5 rounded-xl">
                                        @endif
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <p class="text-sm text-danger">*Maximum size 1 MB</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username" class="form-control-label">Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" id="username"
                                            name="username" type="text"
                                            value="{{ old('username', $users[0]->username) }}">
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
                                            name="email" type="email" value="{{ old('email', $users[0]->email) }}">
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
                                            name="name" type="text" value="{{ old('name', $users[0]->name) }}">
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
                                            value="{{ old('birthday_date', $users[0]->birthday_date) }}">
                                        @error('birthday_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="javascript:void(0);"
                                    onclick="location.href='{{ url('dashboard/profile/edit') }}'" class="font-inter">
                                    <button class="btn bg-gradient-info btn-sm"> Update
                                        Profile</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //preview profilr image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
