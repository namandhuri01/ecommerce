@extends('includes.header')
@section('title', 'Orders' )
@section('content')
    @foreach ($orders as $order)
        {{$order->id}}
        {{ presentPrice($order->billing_total)}}
        {{ $order->quantity}}
        {{-- @foreach ($order->products as $product)
            {{$product->name}}        
            <img src="{{ productImage($product->image)}}">
        @endforeach --}}
    @endforeach
@endsection