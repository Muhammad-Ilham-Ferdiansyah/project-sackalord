@extends('layouts.main')
@section('container')
    <h1 class="font-bold ml-7">Post Categories</h1>
    <section class="w-full flex flex-col items-center px-3">
        @foreach ($categories as $category)
            <article class="flex flex-col shadow my-4 rounded-xl overflow-hidden">
                <!-- Article Image -->
                {{-- <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                </a> --}}
                <div class="bg-white flex flex-col justify-start p-6">
                    <ul>
                        <li>
                            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
                        </li>
                    </ul>
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
