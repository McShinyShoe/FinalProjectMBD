@extends('layout')
@section('active', 'insert_payments')
@section('title', 'ShinyClean Login')
@section('content')

<div class="container">
    <form action="{{route('insert.payments.post')}}" method="POST" style="width: 500px" class="ms-auto me-auto mt-5 mb-5">
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
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Amount</label>
            <input type="text" class="form-control" name="amount">
        </div>
        <div class="mb-3">
            <label class="form-label">Order ID</label>
            <input type="text" class="form-control" name="orders_id">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
