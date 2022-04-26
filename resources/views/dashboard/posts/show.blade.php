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
                <a href="javascript:void(0);" onclick="location.href='/dashboard/posts/{{ $post->slug }}/edit'"
                    class="text-left mb-5">
                    <p class="text-lg text-green-500 hover:text-green-800 font-bold flex items-center mr-5"><i
                            class="fas fa-edit pr-1"></i> Edit
                    </p>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="text-lg text-red-500 hover:text-red-900 font-bold flex items-center"
                        data-toggle="tooltip" data-original-title="Hapus Post" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash pr-1"></i> Delete
                    </button>
                </form>
            </div>
            <h1 class="text-3xl font-bold pb-4">{{ $post->title }}</h1>
            <p href="#" class="text-sm pb-5">
                Published on {{ $post->created_at->diffForHumans() }}
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
    </article>
@endsection
