@extends('layout.app')
@extends('layout.nav')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-5">List Product</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary "> Add product</a>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
    @endif

    <table>
        <div class="row">
            <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                <p>ID</p>
            </div>
            <div class="col-md-2 d-flex align-items-center justify-content-center border border-dark">
                 <p>Title</p>
            </div>
            <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                <p>Price</p>
            </div>
            <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                <p>Code</p>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center border border-dark">
                <p>Descriptiom</p>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center border border-dark">
                <p>Action</p>
            </div>
        </div>
        <tbody>
            @if($product->count() > 0)
                @foreach ($product as $pr)
                <div class="row">
                    <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                        <p>{{ $loop->iteration }}</p>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center border border-dark">
                         <p>{{ $pr->title }}</p>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                        <p>{{ $pr->price }}</p>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-center border border-dark">
                        <p>{{ $pr->code }}</p>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center border border-dark">
                        <p>{{ $pr->description }}</p>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center border border-dark">
                        <div class="gap-2">
                            <a href="{{  route('product.show', $pr->id) }}" type="button" class="btn btn-secondary">Details</a>
                            <a href="{{  route('product.edit', $pr->id) }}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{route('product.destroy', $pr->id)}}" method="POST" class="btn btn-danger"  onsubmit="return confirm('Delete')">
                                @csrf
                                @method('DELETE')
                                <button style="margin-left: -30px" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
                
            @else 
                
            @endif
        </tbody>
    </table>
@endsection

