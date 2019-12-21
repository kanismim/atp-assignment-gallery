@extends('base')
@section('nav')


      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right navbar-nav-primary">
        <li><a class="nav-link" href="/welcome/home">Gallery <span class="sr-only">(current)</span></a></li>
        <li> <a class="nav-link" href="/image">Add Image</a></li>
        <li> <a class="nav-link" href="/logout">Logout</a></li>


      </ul>
    </div>
  </div>
</nav>   
@endsection

@section('Vehicles')
<div class="card">Car</div>
      <div class="row">  
     
      @foreach ($image1 as $img1)
      <div class="container">
<!-- Card deck -->
<div class="card-deck row">
  <div class="col-sm-6 mt-2">
  <!-- Card -->
  <div class="card">
    <!--Card image-->
    <div class="view overlay">
      <img src="{{ asset($img1->file_path) }}" class="card-img-top" alt="..."  height="200">
      <h4 class="card-title">{{$img1->sub_category}}</h4>
      <!--Text-->
      <p class="card-text">{{$img1->desc}}<br> Updated At: {{$img1->updated_at}}</p>
    </div>
    
    <div class="card-body">
   
      <a href="{{route('image.edit', [$img1['id']])}}" class="btn btn-dark">Edit</a>
      <a href="{{route('image.delete', [$img1['id']])}}" class="btn btn-dark">Delete</a>
    </div>
  </div>
      </div>
      @endforeach
      </div>
      </div>
@endsection


@section('Animal')
    <div class="card">Animal</div>
    

    @foreach ($image2 as $img2)
      <div class="container">
<!-- Card deck -->
<div class="card-deck row">
  <div class="col-sm-6 mt-2">
 
  <div class="card">

    <div class="view overlay">
     <img src="{{ asset($img2->file_path) }}" class="card-img-top" alt="..."  height="300">
     
      <h4 class="card-title">{{$img2->sub_category}}</h4>
    
      <p class="card-text">{{$img2->desc}}<br> Updated At: {{$img2->updated_at}}</p>
    </div>
  
    <div class="card-body">
      <a href="{{route('image.edit', [$img2['id']])}}" class="btn btn-dark ">Edit</a>
       <a href="{{route('image.delete', [$img2['id']])}}" class="btn btn-dark">Delete</a>
    </div>
  </div>
      </div>
      @endforeach
      </div>
@endsection

