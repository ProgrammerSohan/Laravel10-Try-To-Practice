<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    @if(Session::has('error'))
    <h4>{{Session::get('error')}}</h4>
    @endif

    <form action="{{route('login')}}" method="POST">
        @csrf

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="email@example.com" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <button>Login</button>

    </form>

</body>
</html>
