@extends('layout')

@section('content')
	<h2>Notes</h2>
                                @foreach ($notes as $note)
                                    <div>
                                        {{ $note->note}}
                                    </div>
                                @endforeach
@endsection