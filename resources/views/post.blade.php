@extends('layout.mainPost')
@section('container')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <br>
            <p> Kategori <a href="/?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

            @if ($post->image)

            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
        
        @else
        <img src="../images/No-Image.png" width="300" height="300" alt="" class="img-fluid">
    @endif


           

            <article class="my-3 fs-4">
                {!! $post->body !!}
            </article>

   


<a href="/">Back to List Books</a>
        </div>
    </div>
</div>

@endsection

