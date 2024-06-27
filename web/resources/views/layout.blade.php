<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShinyClean')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1 class="fw-bold">{{config('app.name')}}</h1>
  <h3>Wash now or naked tomorrow</h3>
  @if(auth()->user())
    <p>Welcome back {{auth()->user()->name}}!</p>
  @endif

</div>
@include('navbar')
@yield('content')
</body>
</html>