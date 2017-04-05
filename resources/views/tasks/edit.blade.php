<html>
<head>
    <title></title>
</head>
<body>
<h1>Editando noticia {{$id}}</h1>
{!! Form::open(['route'=>['task.update',$id],'method'=>'put']) !!}
    <button type="submit">Actualizar Noticia</button>
{!! Form::close() !!}
{!! Form::open(['route'=>['task.destroy',$id],'method'=>'delete']) !!}
    <button type="submit">Eliminar Noticia</button>
{!! Form::close() !!}
</body>
</html>