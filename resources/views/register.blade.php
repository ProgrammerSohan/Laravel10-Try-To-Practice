<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Practicing with custom Auth</title>
</head>
<body>

    <h2>Register Form</h2>
    <i> <a href="{{ url('/') }}">Go to home page</a></i>
    @if(Session::has('success'))
        <h5>{{ Session::get('success')}}</h5>
    @endif
    <form action="{{route('register')}}" method="POST">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Sohan Sujan" required><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="email@example.com" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <button>Register</button>
        <p>If you have an account! You can login by clicking here,    <a  style="font-size:20px;" href="{{ route('login') }}">Log In</a></p>

    </form>

</body>
</html>
