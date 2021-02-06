@extends('layouts.app')

@section('content')

<div class="container">
	<form method="POST" action="{{ route('save_category') }}" enctype="multipart/form-data">
		@csrf
		<input type="text" name="name">
		<input type="text" name="address">
		<button class="btn btn-primaru w-100 mt-4">დამატება</button>
	</form>
</div>

@endsection