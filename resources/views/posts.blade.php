@extends('layouts.main')
@section('container')
    <h1 class="font-bold text-2xl text-center mb-6">{{ $title }}</h1>
    <section class="w-full flex flex-col px-2">
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <form action="/posts" method="GET">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group relative flex flex-shrink items-stretch w-full mb-4 justify-center">
                        <input type="text"
                            class="form-control relative flex-auto min-w-full block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-purple-600 focus:outline-none"
                            name="search" placeholder="Search.." value="{{ request('search') }}">
                        <button
                            class="btn inline-block ml-2 px-6 py-2 border-2 border-purple-600 text-purple-600 font-semibold text-bold leading-tight uppercase rounded hover:text-white hover:bg-purple-800 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            type="submit" id="button-addon3">Search</button>
                    </div>
                </form>
            </div>
        </div>
        @if ($posts->count())
            <article class="flex flex-col shadow my-4 rounded-xl border-solid border-2 border-slate-700 overflow-hidden">
                <a href="/posts/{{ $posts[0]->slug }}" class="hover:opacity-75">
                    @if ($posts[0]->image)
                        <div style="max-height:400px; overflow:hidden">
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="pb-4 rounded">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1000x500?{{ $posts[0]->category->name }}"
                            class="pb-4 rounded">
                    @endif
                </a>
                <div class="bg-white flex flex-col justify-center text-center p-6">
                    <a href="/posts/{{ $posts[0]->slug }}"
                        class="text-3xl font-bold hover:text-purple-700 pb-4">{{ $posts[0]->title }}</a>
                    <p class="text-sm pb-3">
                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="font-semibold hover:text-purple-700">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="font-semibold hover:text-purple-700">{{ $posts[0]->category->name }}</a>
                        <a
                            class="bg-purple-500 px-3 ml-2 py-1 rounded-xl text-white">{{ $posts[0]->created_at->diffForHumans() }}</a>
                    </p>
                    <p class="pb-6">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="uppercase text-gray-800 hover:text-purple-700">Continue
                        Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <div class="grid grid-cols-3 gap-3">
                @foreach ($posts->skip(1) as $post)
                    <article
                        class="flex flex-col shadow my-4 rounded-xl border-solid border-2 border-slate-700 overflow-hidden">
                        <a href="/posts/{{ $post->slug }}" class="hover:opacity-75">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="pb-4 rounded">
                            @else
                                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            @endif
                        </a>
                        <div class="bg-white flex flex-col justify-start p-6">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="text-purple-600 hover:text-purple-800 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
                            <a href="/posts/{{ $post->slug }}"
                                class="text-3xl font-bold hover:text-purple-700 pb-4">{{ $post->title }}</a>
                            <p class="text-sm pb-3">
                                By <a href="/posts?author={{ $post->author->username }}"
                                    class="font-semibold hover:text-purple-700">{{ $post->author->name }}</a> <a
                                    class="font-sm hover:text-purple-700">{{ $post->created_at->diffForHumans() }}</a>
                            </p>
                            <p class="pb-6">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}"
                                class="uppercase text-gray-800 hover:text-purple-700">Continue
                                Reading <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                @endforeach
            </div>
            {{ $posts->links() }}
            <!-- Pagination -->
            {{-- <div class="flex items-center py-8">
                <a href="#"
                    class="h-10 w-10 bg-purple-800 hover:bg-purple-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:bg-purple-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
                    <i class="fas fa-arrow-right ml-2"></i></a>
            </div> --}}
    </section>
@else
    <p class="text-center text-2xl">No Post Found.</p>
    @endif
@endsection
