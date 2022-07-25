@extends('product.layout')
@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('flash_message'))
            <p class="alert {{ Session::get('flash_message', 'alert-info') }}">{{ Session::get('flash_message') }}</p>
            @endif
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">

                        
                        <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New Product" style="float: right; ">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <br/>
                        <br/>
                        <form method="GET" action="{{ url('/product') }}">

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="product_search" class="form-control"
                                            placeholder="Search by name" value="{{ old('product_search') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button class="btn btn-success">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @if(!empty($product) && $product->count())
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ url('/product/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>

                                            <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="10">There are no data.</td>
                                </tr>
                            @endif
                                </tbody>
                               
                               
                            </table>
                            <br>
                            {!! $product->links() !!}
                            @if( request()->get('product_search') )
                            <a href="{{ url('/product/') }}" style="float: right;  padding: 10px 10px;" title="Home"><button class="btn btn-primary btn-sm">Back</button></a>
                            <br><br>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection