<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShinyClean')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="font-family: 'Trebuchet MS', sans-serif;">
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1 class="fw-bold">{{config('app.name')}}</h1>
  <h3>Laundry Today or Naked Tomorow</h3>
  @if(auth()->user())
    <p>Welcome back {{auth()->user()->name}}!</p>
  @endif

</div>
@include('navbar')
@yield('content')
</body>
</html>