@extends('layout.mainPost')
@section('container')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <br>
            <p>By. <a href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

            @if ($post->image)

            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
        
        @else
        <img src="https://source.unsplash.com/1200x400/?game" alt="" class="img-fluid">
    @endif


           

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>

   


<a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>

@endsection

