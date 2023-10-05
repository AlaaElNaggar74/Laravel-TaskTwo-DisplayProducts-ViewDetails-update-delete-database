
@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="ce col-md-6 col-lg-10 m-auto">
    <h1 class="mt-4 mb-5 text-center">Hello Client</h1>

    <div class="row">
        @foreach ($products as $item)
        <div class="col-md-4 mb-3">
            <div class="card text-bg-info bg-opacity-50 mb-3 p-2" >
                <h4 class="card-header">Product-{{$item["id"]}}</h4>
                <div class="imgg">
                    <img src="{{asset('/images/'.$item["images"])}}" alt="error" srcset="" class="w-100" style="height:250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$item["title"]}}</h5>
                  <p class="card-text">{{$item["description"]}}</p>
                </div>
                <div class="b">
                    {{-- <a href="details/{{$item["id"]}}" class="btn btn-primary">View</a> --}}
                    <a href="{{route('iti.show',$item["id"])}}" class="btn btn-primary">View</a>

                </div>
              </div>
        </div>
        @endforeach

    </div>
      
</div>
</div>
@endsection

{{-- 
@stop

<table class="table table-hover text-center ">
    <thead>
     <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
         <th>Image</th>
         <th>Action</th>
     </tr>
    </thead>
    <tbody>

@foreach ($products as $item)
<tr>
 <td>{{$item["id"]}}</td>
 <td>{{$item["title"]}}</td>
 <td class="w-25">{{$item["description"]}}</td>
 <td>{{$item["price"]}}</td>
 <td ><img src="{{$item["images"]}}" alt="error" srcset="" style=" width:100px;height:100px"></td>

 <td class="w-25">
     <a href="details/{{$item["id"]}}" class="btn btn-primary">View</a>
     <a href="" class="btn btn-info">Update</a>
     <a href="" class="btn btn-danger">Delete</a>
 </td>
</tr>
@endforeach


    </tbody>
   </table> --}}