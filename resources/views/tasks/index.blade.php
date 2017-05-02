<html>
<head>
    <title></title>
</head>
<body>
<!-- contenido aqui -->
{!! Form::open(['route'=>'task.index','method'=>'GET|HEAD']) !!}
<div class="form-group">
    <label for="task" class="col-sm-3 control-label">Task</label>
    <div class="col-sm-6">
        {!! Form::label('email', 'E-Mail Address') !!}
        {!! Form::label('email', 'E-Mail Address') !!}
        <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
    </div>
</div>

<button type="submit">Listar</button>
{!! Form::checkbox('name', 'value')!!}

{!! Form::date('name', \Carbon\Carbon::now()) !!}
{!! Form::select('animal',[
'Cats' => ['leopard' => 'Leopard'],
'Dogs' => ['spaniel' => 'Spaniel'],
]) !!}
		<div class="visible-print text-center">
		            {!! QrCode::size(100)->generate(Request::url()); !!}
		            <p>Scan me to return to the original page.</p>
		</div>


{!! MaterializeCSS::include_full() !!}

<link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
{!!Form::close() !!}
{!! MaterializeCSS::include_full() !!}






<link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>



    </body>
</html>