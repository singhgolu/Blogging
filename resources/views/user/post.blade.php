@extends('user.app')

@section('background-image', asset('user/img/post-bg.jpg'))

@section('title', $post->title)

@section('sub-heading', $post->subtitle)

@section('main-content')
	<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at {{ $post->created_at->diffForHumans() }}</small>
            @foreach($post->categories as $category)
              <a href="{{ route('category', $category->slug) }}"><small class="pull-right" style="margin-right: 20px;">
                {{ $category->name }}
              </small></a>
            @endforeach
            {!! htmlspecialchars_decode($post->body) !!}


            <!-- Tag Clouds -->
            <h4>Tag Clouds</h4>
            @foreach($post->tags as $tag)
              <a href="{{ route('tag', $tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid grey;padding: 5px;">
                {{ $tag->name }}
              </small></a>
            @endforeach
          </div>
        </div>
    </div>
@endsection