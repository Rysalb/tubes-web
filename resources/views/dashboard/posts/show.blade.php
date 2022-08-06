@extends('dashboard.layouts.main')

@section('container')

<div class="container ">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <br>
         
            <a href="/dashboard/posts" class="btn btn-success"><i data-feather="arrow-left"></i> Back to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i data-feather="edit"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i data-feather="x-circle"></i> Delete</button>
                </form>

                @if ($post->image)

                <div>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                </div>
                
                @else
            <img src="../../images/No-Image.png" width="500" height="500" alt="" class="img-fluid mt-3">

            @endif

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>

        </div>
    </div>
</div>

@endsection
