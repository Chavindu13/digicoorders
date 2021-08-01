@extends('layouts.app')

@section('content')
  <h1>Add Order</h1>
  {!! Form::open(['action' => ['OrdersController@update', $product->id], 'method' => 'POST']) !!}
    {{ Form::bsLabel('Category: '.$product->category) }}
    {{ Form::bsLabel($product->name) }}
    {{ Form::bsLabel('Rs.'. $product->price) }}
    {{ Form::bsText('Quantity') }}
    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::bsSubmit('Add Order', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection