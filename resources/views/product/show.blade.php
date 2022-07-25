@extends('product.layout')
@section('content')
<br><br><br>
<div class="card" >
  <div class="card-header">Show Product</div>
  <div class="card-body">
  
        <div class="card-body" >
            <a href="{{ url('/product/') }}" style="float: right;  padding: 10px 10px;" title="Home"><button class="btn btn-primary btn-sm"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <br>

        <h5 class="card-title">Product Name : {{ $product->name }}</h5>
        <br>
        <p class="card-text">Quantity : {{ $product->quantity }}</p>
        <br>
        <p class="card-text">Price : {{ $product->price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>