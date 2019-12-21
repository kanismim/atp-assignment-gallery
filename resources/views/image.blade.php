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

@section('content')
               
               <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Add an Image</h3>
                <div class="card-body">
                    
                      <select class="form-control" id="exampleFormControlSelect1" required name="category"> 
                          <option selected>Category</option>
                          <option value=" Vehicles"> Vehicles</option>
                          <option value="Animal">Animal</option>
                      </select>
                 
                      <select class="form-control" id="exampleFormControlSelect1" required name="sub_cat">
                          <option selected>Sub Category</option>
                          <option value="Truck">Truck</option>
                          <option value="Car">Car</option>
                          <option value="Boat">Boat</option>
                          <option value="Dog">Dog</option>
                          <option value="Cat">Cat</option>
                      </select>
                  
                      <div id="togStatus" class="hint-block">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="desc" placeholder="Description" >
                        </div>
                      <br>
                  <div class="file-loading">
                      <input id="input-file-1" name="file[]" multiple type="file" accept="image/*">
                  </div>
                 
               </form>
    </div>
@endsection

@section('script')
<script>
    $("#input-file-1").fileinput({
      theme:'fa',
        autoOrientImage: true,
    });
   
    </script>
@endsection