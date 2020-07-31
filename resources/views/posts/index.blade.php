@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                @isset($category)
                <h4>Category: {{ $category->name }}</h4>
                @endisset

                @isset($tag)
                <h4>Tag: {{ $tag->name }}</h4>
                @endisset

                @if(!isset($tag) && !@isset($category))
                <h4>All Post</h4>
                @endif

                <hr>
            </div>
            <div>

            @if(Auth::check())
            <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
            @else 
            <a href="{{ route('login') }}" class="btn btn-primary">Login to Create New Post</a>
            @endif
            </div>
        </div>
        <div class="row">
                @forelse($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $post->title }}
                            </div>
                            <div class="card-body">
                                {{ Str::limit($post->body, 100, '.') }}

                                <div>
                                <a href="/posts/{{ $post->slug }}">Read More</a>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                {{-- Published on {{ $post->created_at->format("d, F Y") }} --}}
                                Published on {{ $post->created_at->diffForHumans() }}
                                @auth
                                    <a href="/posts/{{ $post->slug }}/edit" class="btn btn-small btn-success">Edit</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            There's no posts.
                        </div>
                    </div>
                @endforelse
        </div>
        <div class="d-flex justify-content-center">
        {{ $posts->links() }}
        </div>
    </div>
@stop