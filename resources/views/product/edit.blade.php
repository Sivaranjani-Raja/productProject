@extends('product.layout')
@section('content')
<div class="card" style="width: 48rem;">
  <div class="card-header">Edit Product Details</div>
  <div class="card-body" >

     <a href="{{ url('/product/') }}" style="float: right;  padding: 10px 10px;" title="Home"><button class="btn btn-primary btn-sm"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <br><br>

      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />

        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </br>
        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" value="{{$product->quantity}}" class="form-control">
        @if ($errors->has('quantity'))
        <span class="text-danger">{{ $errors->first('quantity') }}</span>
        @endif
      </br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control">
        @if ($errors->has('price'))
        <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
      </br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop