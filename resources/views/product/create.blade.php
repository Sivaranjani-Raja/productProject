@extends('product.layout')
@section('content')
<br>
<br>
<br>
<div class="card" style="width: 48rem;">
  <div class="card-header">Add New Product</div>
  <div class="card-body">

    <a href="{{ url('/product/') }}" style="float: right;  padding: 10px 10px;" title="Home"><button class="btn btn-primary btn-sm"><i class="fa fa-home" aria-hidden="true"></i></button></a>
<br>
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Product Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <label>Quantity</label></br>
        <input type="number" name="quantity" id="quantity" class="form-control" required></br>
        @if ($errors->has('quantity'))
        <span class="text-danger">{{ $errors->first('quantity') }}</span>
        @endif
        
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control" required></br>
        @if ($errors->has('price'))
        <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
  
  </div>
</div>
@stop