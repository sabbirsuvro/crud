@extends('layout.app')
@extends('layout.nav')

@section('body')
    <h1>Add Product</h1>
    <hr>

    <form action="{{ route('product.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          {{-- <label for="exampleInputEmail1" class="form-label">Email address</label> --}}
          <input type="text" name="title" class="form-control" placeholder="title">
        </div>
        <div class="mb-3">
          <input type="text" name="price" class="form-control" placeholder="price">
        </div>
        <div class="mb-3">
          <input type="text" name="code" class="form-control" placeholder="code">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description" id="Textarea1" placeholder="Short_description" rows="4"></textarea>
          {{-- <textarea type="text" name="description" class="form-control" placeholder="description" row="3"> --}}
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
@endsection