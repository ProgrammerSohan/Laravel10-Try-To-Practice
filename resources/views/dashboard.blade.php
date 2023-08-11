<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h2>Welcome to home page</h2>
    <i> <a href="{{ url('/') }}">Go to home page</a></i>
    @if(Session::has('success'))
        <h5>{{ Session::get('success')}}</h5>
    @endif
   <div style="float:right; background-color:red;">
   <form action="{{route('logout')}}" method="POST">
    @csrf
    @method('DELETE')
    <button  type="submit">Logout</button>
   </form>

 </div>
    <h3 style="color: green;">Welcome, <span style="color:blue;font-style:italic;">{{Auth::user()->name}}</span></h3>
</body>
</html>
