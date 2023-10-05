@extends('layouts.app')

@section('content')
 <div class="container">
    <h1 class="text-center mt-3 mb-5"> The Product Details Is :  </h1>
    <div class="dis d-flex justify-content-center align-items-center">
        
    <div class="col-md-6 m-2">
        <img src="{{asset('/images/'.$productId["images"])}}" class="card-img-top w-100" style="height:400px" alt="...">
    </div>
    
    <div class="col-md-6 m-2">
       <div class="" >
         <div class="">
            <h3 class="">ID :  <span class="text-danger">{{$productId['id']}}</span></h3>
            <h3 class="">Title : <span class="text-danger">{{$productId['title']}}</span></h3>
            <h3 class="">Description :<span class="text-danger">{{$productId['description']}}</span></h3>
            <h3  >Price <span class="text-danger">{{$productId['price']}} $</span></h3>
         </div>
      </div>
    </div>
    </div>

    <div class="bt text-center">
      <a href="/products" class="mt-2 btn btn-danger">Back </a>
    </div>
 </div>
@endsection