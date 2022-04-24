@extends('dashboard.layouts.main')

@section('container')
    <div class="w-full px-5">
        <h3 class="text-lg text-white">Edit Post</h3>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Please fill the form.</h6>
                    </div>
                    <div class="card-body pt-0 pb-2 px-4">
                        <div class="col-lg-8">
                            <form method="POST" action="/dashboard/posts/{{ $post->slug }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        name="title" autocomplete="off" autofocus
                                        value="{{ old('title', $post->title) }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                        name="slug" autocomplete="off" value="{{ old('slug', $post->slug) }}">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="category_id" class="form-select">
                                        @foreach ($categories as $category)
                                            @if (old('category_id', $post->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                </option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="body" class="form-label">Body</label>
                                    @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                                    <trix-editor input="body"></trix-editor>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
