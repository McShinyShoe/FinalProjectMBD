@extends('layout')
@section('active', 'register')
@section('title', 'ShinyClean Login')
@section('content')

<div class="container">
    <form action="{{route('register.post')}}" method="POST" style="width: 500px" class="ms-auto me-auto mt-5 mb-5">
        @csrf
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-danger">{{session('success')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone number</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Home Address (Optional)</label>
            <input type="text" class="form-control" name="address">
        </div>
        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <div class="form-text mb-2">Already have an account? <a href="/login">Login</a></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
