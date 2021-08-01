@extends('layouts.app')

@section('content')
  <h1>Orders</h1>
  @if(count($orders) > 0)
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Item Name</th>
          <th scope="col">Item Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      @foreach($orders as $order)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->itemname}}</td>
          <td>Rs.{{$order->itemprice}}</td>
          <td>{{$order->quantity}}</td>
          <td>Rs.{{$order->total}}</td>
        </tr>
      @endforeach
    </table>
  @endif
@endsection