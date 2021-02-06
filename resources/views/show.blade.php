@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->price }}</p>
		<article>{{ $post->desc }}</article>
		<img src="{{ asset('images'."/".$post->image) }}" alt="" style="with:80px; height:80px" class="img-circle">
	</div>
@endsection