@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->price }}</p>
		<article>{{ $post->desc }}</article>
		<img src="{{ asset('images'."/".$post->image) }}" alt="" style="with:80px; height:80px" class="img-circle">
	</div>
	<hr>
	<div class="container">
		<h2>კომენტარები</h2>
	@foreach($post->comments as $comment)
		<article>{{ $comment->comment }}</article>
	@endforeach
	<form method="POST" action="{{ route('saveComment') }}">
		@csrf
		<textarea class="form-control" placeholder="კომენტარი" name="comment"></textarea>
		<input type="hidden" name="post_id" value="{{ $post->id }}">
		<button class="btn btn-primary">დაკომენტარება</button>
	</form>
	</div>
@endsection