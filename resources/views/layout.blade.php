<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>@yield('title')</title>
</head>

<body>


  <nav class="navbar bg-dark" data-bs-theme="dark">
  <p>LIBRARY</p>
  <a class="nav-link" href="{{route('books.index')}}">Books</a>
  <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
  @guest
      <a class="nav-link " href="{{route('auth.register')}}">Register</a>
  <a class="nav-link " href="{{route('auth.login')}}">Login</a>
  @endguest
  @auth
    <a class="nav-link disabled " href="#">{{Auth::user()->name}}</a>
    <a class="nav-link " href="{{route('auth.logout')}}">Logout</a>
  @endauth

  </nav>


  <div class="container py-5">@yield('content')</div>
    



    <script src="{{ asset('js/jqurey-3.6.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>


    

</body>

</html>
