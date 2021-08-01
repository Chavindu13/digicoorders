@extends('layouts.app')

@section('content')
  <h1>Products</h1>
  @if(count($products) > 0)
    @foreach($products as $product)
      <div class="well">
        <h3>
          <img src="{{url("/images/{$product->id}.png")}}" style="width:48px;height:48px;">
          <span class="label label-danger">{{$product->name}}</span>
          <span class="label label-danger">Rs.{{$product->price}}</span>
          <a href="{{url("/order/{$product->id}/edit")}}" class="btn btn-lg btn-info pull-right">Buy Now</a> 
        </h3>
      </div>
    @endforeach
  @endif
@endsection