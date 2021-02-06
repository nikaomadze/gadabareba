@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <a href="{{ route('userShow', ['id'=>$post->id]) }}"><img src="{{ asset('images'."/".$post->image) }}" alt="" style="with:80px; height:80px" class="img-circle"></a>
        <p>{{ $post->created_at }}</p>
    @endforeach
</div>
@endsection