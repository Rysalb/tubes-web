
@extends('layout.mainPost')

@section('container')
<h1 class='mb-3 text-center'>{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
            <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                  <button class="btn btn-dark bg-black" type="submit">Search</button>
                </div>
              </div>

        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
  </div>

  

<div class="container">
    <div class="row">
        @foreach ($posts->skip(0) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 " style="background-color:rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}"class="text-white text-decoration-none" >{{ $post->category->name }}</a></div>

                @if ($post->image)

                    <img src="{{ asset('storage/' . $post->image) }}" width="300" height="300" alt="" class="img-fluid">
                
                @else
                <img class="card-img-top" src="../images/No-Image.png" width="300" height="300" alt="Card image cap">
            @endif

               
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">
                        <p>kategori : <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                        </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
  <p class="text-center fs-4" >No Post Found</p>

@endif

<div class= "d-flex justify-content-center">
  {{ $posts->links() }}
</div>


@endsection