

<div class='col-md-6 col-md-offset-3'>
  <h1>Add New Candidate</h1>
  {!! Form::open(['route' => 'candidate.create', 'method'=>'post']) !!}
  <div class='form-group'>
   {!! Form::label('name', 'Name:') !!}
   {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('email', 'Email:') !!}
   {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('phone', 'Phone:') !!}
   {!! Form::text('phone', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('latitude', 'Latitude:') !!}
   {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('longitude', 'Longitude:') !!}
   {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('city', 'City:') !!}
   {!! Form::text('city', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('state', 'State:') !!}
   {!! Form::text('state', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
   {!! Form::label('date', 'Date:') !!}
   {!! Form::text('date', null, ['class' => 'form-control']) !!}
  </div>

  <div class='form-group'>
    <button type="submit">Enviar Formulario</button>
  {!! Form::close() !!}
 </div>
