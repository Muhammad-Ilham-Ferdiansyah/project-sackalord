@extends('layouts.main')

@section('container')
    <article class="flex flex-col px-44">
        <!-- Article Image -->
        <div class="bg-white flex flex-col justify-start p-6">
            <h1 class="text-3xl font-bold pb-4">{{ $post->title }}</h1>
            <p href="#" class="text-sm pb-8">
                By <a href="/posts?author={{ $post->author->username }}"
                    class="font-semibold hover:text-purple-700">{{ $post->author->name }}</a> in <a
                    href="/posts?category={{ $post->category->slug }}"
                    class="font-semibold hover:text-purple-700">{{ $post->category->name }}</a>, Published on
                {{ $post->created_at->diffForHumans() }}
            </p>
            @if ($post->image)
                <div style="max-height:400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" class="pb-4 rounded">
                </div>
            @else
                <img src="https://source.unsplash.com/1000x500?{{ $post->category->name }}" class="pb-4 rounded">
            @endif
            <h1 class="text-2xl font-bold pb-3 mt-3">Introduction</h1>
            <p class="pb-3">{{ $post->excerpt }}</p>
            <h1 class="text-2xl font-bold pb-3">Body</h1>
            {!! $post->body !!}
        </div>
        <a href="/posts" class="text-left p-6">
            <p class="text-lg text-purple-600 hover:text-purple-800 font-bold flex items-center"><i
                    class="fas fa-arrow-left pr-1"></i> Previous
            </p>
        </a>
    </article>
@endsection
