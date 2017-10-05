@extends('main')

@section('title', 'Home')


@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my blog</h1>
        <p class="lead">Thank you for visiting. This is my first laaravel website.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p> {{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 50 ? "..." : '' }} </p>
          <a href="" class="btn btn-primary">Read more</a>
        </div>
        <hr>
      @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
      <div class="sidebar">
        <h2>Sidebar</h2>
      </div>
    </div>
  </div>
@endsection