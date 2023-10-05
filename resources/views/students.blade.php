<!DOCTYPE html>
<html>
    <head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="by my-3">
        <a href="{{route('student.input')}}" class="btn btn-primary">Add products</a>

    </div>
    {{-- @dump($students) --}}
<div class="ce col-md-6 col-lg-10 m-auto">
    <h1 class="mt-4 mb-5 text-center">Hello Client</h1>

    <div class="row">
        @foreach ($students as $item)
        <div class="col-md-4 mb-3">
            <div class="card text-bg-info bg-opacity-50 mb-3 p-2" >
                <h4 class="card-header">Product-{{$item->id}}</h4>
                <div class="imgg">
                    <img src="{{asset('/images/'.$item->image)}}" alt="error" srcset="" class="w-100" style="height:250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <p class="card-text">{{$item->email}}</p>
                  <p class="card-text">{{$item->grade}}</p>
                </div>
                <div class="b">
                    <a href="{{route('student.show',$item->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('student.destroy',$item->id)}}" class="btn btn-primary" onclick="confirmation(event)">delete</a>
                    <a href="{{route('student.update',$item->id)}}" class="btn btn-primary">Update</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
      <div class="d-flex justify-content-center mt-4">
        {!! $students->links("pagination::bootstrap-4") !!}

      </div>
</div>
</div>

@endsection


<script type="text/javascript" >
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {
                window.location.href = urlToRedirect;
            }  
        });
    }
</script>



</head>
</html>