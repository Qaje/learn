<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
  </head>
  <body>
    <h2>NOTES</h2>
    <ul>
      @foreach ($notes as $note)
        <li>
            {{$note->note}}
        </li>
      @endforeach
    </ul>
    <form method="post">
        {!! csrf_field() !!}
        <textarea></textarea>
        
        <button type="submit">Create Note </button>
    </form>
  </body>
</html>
