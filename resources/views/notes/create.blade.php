@extends('layout')

@section('content')
	<h1>Create a Note</h1>
	<form method="POST" action="{{ url('notes') }}" class="form">
		{!! csrf_field() !!}
		<textarea name="note" class="form-control"></textarea>
		<button type="submit" class="btn btn-primary">Create Note</button>
	</form>
@endsection
