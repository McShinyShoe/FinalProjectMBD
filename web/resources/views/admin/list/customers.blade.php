@extends('layout')
@section('title', 'ShinyClean Login')
@section('active', 'home')
@section('content')

@php
$isEmpty = true
@endphp

@if(auth()->user())
@foreach ($customers as $customer)
  @if(auth()->user()->email == $customer->Customers_EMail)
    @php
      $userid=$customer->Customers_ID
    @endphp
  @endif
@endforeach
<div class="container mt-5">
  <div class="row">
    @foreach ($orders as $order)
      @if($userid == $order->Orders_Customers_ID)
      @php
        $isEmpty = false
      @endphp
      <div class="col-sm-4 bg-primary p-3 m-2 rounded text-white">
        @if($order->Orders_TakeDate)
          <h3>Order ID {{$order->Orders_ID}} (FINISHED)</h3>
        @else
          <h3>Order ID {{$order->Orders_ID}}</h3>
        @endif
        <p>Days: {{$order->Orders_Days}}</p>
        <p>Start: {{$order->Orders_StartDate}}</p>
        @if($order->Orders_TakeDate)
          <p>End: {{$order->Orders_TakeDate}}</p>
        @else
          <p>End: {{$order->Orders_TakeDate}}</p>
        @endif
      </div>
      @endif
    @endforeach
    @if($isEmpty)
    <div class="container text-center">
      <h3>User havent made any orders.</h3>
    </div>
    @endif
    <!-- <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div> -->
  </div>
</div>
@else
<div class="container text-center">
  <h3>Please Login to see orders history</h3>
</div>
@endif
@endsection