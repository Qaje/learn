<!-- resources/views/auth/login.blade.php -->
<link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

</form>
{!!Form::close() !!}
{!! MaterializeCSS::include_full() !!}

<link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>

