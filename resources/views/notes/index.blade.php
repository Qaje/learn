@extends('layout')

@section('content')
	<div class="col-md-6 col-md-offset-3">
	<h2>Todas las Notas</h2>
	{{-- use blade  --}}

	<a class="btn btn-primary" href="{{url('notes/create') }}" role="button">Crear una Nueva Nota</a>
	@foreach ($notes as $note)
		<div class="form-group">
			{{ $note->note }}
		</div>
	@endforeach
	</div>
@stop