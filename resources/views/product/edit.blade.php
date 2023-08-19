@extends('layout.app')
@extends('layout.nav')

@section('body')
<div class="container">
    <h1>Edit Product</h1>
    <hr>
</div>

    <form action="{{ route('product.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3">
                <span>title</span><input type="text" name="title" class="form-control" value="{{$product->title}}">
              </div>
              <div class="mb-3">
                <span>price</span><input type="text" name="price" class="form-control" value="{{$product->price}}">
              </div>
              <div class="mb-3">
                  <span>code</span><input type="text" name="code" class="form-control" value="{{$product->code}}">
              </div>
              <div class="mb-3">
                <span>Short_description</span><input class="form-control" type="text" name="description" rows="3" value="{{$product->description}}"></input>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    
@endsection