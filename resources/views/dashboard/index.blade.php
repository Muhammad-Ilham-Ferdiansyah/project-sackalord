@extends('dashboard.layouts.main')

@section('container')
    <div class="w-full px-5">
        <h3 class="text-lg text-white">Welcome back, {{ auth()->user()->name }}</h3>
    </div>
@endsection
