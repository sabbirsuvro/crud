@extends('layout.app')
@extends('layout.nav')

@section('body')
    <h1 class="text-success" >Product Details</h1>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <h4 class="text-success" for="Title" class="from-lebel"> Title : {{ $product->title }} </h4> <br>
        </div>
        <div class="col-md-6">
            <h4 class="text-success" for="Price" class="from-lebel"> Price : {{ $product->price }} </h4><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h5 class="text-success" for="code" class="from-lebel"> code : {{ $product->code }}</h5><br>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-12">
            <p class="text-success" for="descriptopn" class="from-lebel"> descriptopn : {{ $product->description }}</p><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <p class="text-success" for="created_at" class="from-lebel"> created_at : {{ $product->created_at }}</p><br>
        </div>
        <div class="col-md-6">
            <p class="text-success" for="updated_at" class="from-lebel"> updated_at : {{ $product->updated_at }}</p><br>
        </div>
    </div>
        
    
@endsection