
@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="ce col-md-6 col-lg-10 m-auto">
    <h1 class="mt-4 mb-5 text-center">Hello Client</h1>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-bg-info bg-opacity-50 mb-3 p-2" >
                <h4 class="card-header">Product-{{$studentID->id}}</h4>
                <div class="imgg">
                    <img src="{{asset('/images/'.$studentID->image)}}" alt="error" srcset="" class="w-100" style="height:250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title">name : {{$studentID->name}}</h5>
                  <p class="card-text">email :{{$studentID->email}}</p>
                  <p class="card-text">grade : {{$studentID->grade}}</p>
                </div>
                <div class="b">
                    {{-- <a href="/students" class="btn btn-primary">Back</a> --}}
                    <a href="{{route('stu.inde')}}" class="btn btn-primary">Back</a>

                    {{-- <a href="details/{{$item["id"]}}" class="btn btn-primary">View</a> --}}
                    {{-- <a href="{{route('iti.show',$item["id"])}}" class="btn btn-primary">View</a> --}}

                </div>
              </div>
        </div>

    </div>
      
</div>
</div>
@endsection

