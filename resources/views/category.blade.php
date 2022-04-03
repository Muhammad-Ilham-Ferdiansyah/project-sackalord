@extends('layouts.main')
@section('container')
    <h1 class="font-bold ml-7">Post Category : {{ $category }}</h1>
    <section class="w-full flex flex-col px-3">
        @foreach ($posts as $post)
            <article class="flex flex-col shadow my-4 rounded-xl overflow-hidden">
                <!-- Article Image -->
                {{-- <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                </a> --}}
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-purple-700 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
                    <a href="/posts/{{ $post->slug }}"
                        class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="/authors/{{ $post->author->username }}"
                            class="font-semibold hover:text-purple-700">{{ $post->author->name }}</a>, Published on
                        April
                        25th, 2020
                    </p>
                    <a href="#" class="pb-6">{{ $post->excerpt }}</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-purple-700">Continue Reading <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        @endforeach

        <!-- Pagination -->
        <div class="flex items-center py-8">
            <a href="#"
                class="h-10 w-10 bg-purple-800 hover:bg-purple-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
            <a href="#"
                class="h-10 w-10 font-semibold text-gray-800 hover:bg-purple-600 hover:text-white text-sm flex items-center justify-center">2</a>
            <a href="#"
                class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
                <i class="fas fa-arrow-right ml-2"></i></a>
        </div>

    </section>
@endsection
