
@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="ce col-md-10 col-lg-6 m-auto">
    <h1 class="mt-4 mb-5 text-center">Hello Client</h1>

      <div class="my-3 d-flex justify-content-end ">

              <a href="{{route('stu.inde')}}" class="btn btn-primary">Back</a>

            </div>
            <form class="form-floating" method="Post" action="{{isset($updateId)?route('stu.edit'):route('stu.store')}}">
              @csrf
                <div class="form-floating mb-3">
                    <input type="text" value="{{isset($updateId->name)?$updateId->name:""}}" class="form-control" name="name" id="name" placeholder="name">
                    <label for="name">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{isset($updateId->email)?$updateId->email:""}}" @if (isset($updateId))?readonly:"" @endif  name="email" id="email" placeholder="email">
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{isset($updateId->image)?$updateId->image:""}}" name="image" id="image" placeholder="image">
                    <label for="img">Image</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control" value="{{isset($updateId->grade)?$updateId->grade:""}}"  name="grade" id="pass" placeholder="Grade">
                    <label for="pass">Grade</label>

                  </div>
                  <input class="btn btn-success mt-3" type="submit" value="{{isset($updateId)?"Update":"Add"}}">
            </form>
        

      
</div>
</div>
@endsection
