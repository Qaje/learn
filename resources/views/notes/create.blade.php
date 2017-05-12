@extends('layout')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h1>Create a Note</h1>
		<form method="POST" action="{{ url('notes') }}" class="form">
			{!! csrf_field() !!}
			<div class="form-group">
				<textarea name="note" class="form-control" placeholder="Escribe tu nota aqu'i." >{{old('note')}}</textarea>
				<button type="submit" class="btn btn-success">Create Note</button>
			</div>
		</form>
	</div>
@endsection
