@extends('dashboard.layouts.main')

@section('container')
    <article class="flex flex-col px-4 py-4">
        <!-- Article Image -->
        <div class="bg-white flex flex-col justify-between p-6 rounded-xl shadow-xl">
            <div class="flex flex-wrap">
                <a href="javascript:void(0);" onclick="location.href='/dashboard/posts'" class="text-left mb-5">
                    <p class="text-lg text-purple-600 hover:text-purple-800 font-bold flex items-center mr-5"><i
                            class="fas fa-arrow-left pr-1"></i> Back
                    </p>
                </a>
                <a href="javascript:void(0);" onclick="location.href='/dashboard/posts'" class="text-left mb-5">
                    <p class="text-lg text-purple-600 hover:text-purple-800 font-bold flex items-center mr-5"><i
                            class="fas fa-edit pr-1"></i> Edit
                    </p>
                </a>
                <a href="javascript:void(0);" onclick="location.href='/dashboard/posts'" class="text-left mb-5">
                    <p class="text-lg text-purple-600 hover:text-purple-800 font-bold flex items-center"><i
                            class="fas fa-trash pr-1"></i> Delete
                    </p>
                </a>
            </div>
            <h1 class="text-3xl font-bold pb-4">{{ $post->title }}</h1>
            <p href="#" class="text-sm pb-5">
                Published on {{ $post->created_at->diffForHumans() }}
            </p>
            <img src="https://source.unsplash.com/1000x500?{{ $post->category->name }}" class="pb-4 rounded">
            <h1 class="text-2xl font-bold pb-3">Introduction</h1>
            <p class="pb-3">{{ $post->excerpt }}</p>
            <h1 class="text-2xl font-bold pb-3">Body</h1>
            {!! $post->body !!}
        </div>
    </article>
@endsection
