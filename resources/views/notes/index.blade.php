@extends('layout')

@section('content')
	<h1>Todas las Notas</h1>
	{{-- use blade  --}}
	@foreach ($notes as $note)
		<div>
			{{ $note->note }}
		</div>
	@endforeach

@stop