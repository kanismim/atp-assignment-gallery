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

<div class="card">
    <div class="card-body">
        <form method="POST">
            @csrf

            <div class="col">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Category</h5>
                        <input type="text" class="form-control" value="{{$img->category}}" name="category" id="category">
                    </div>

                    <div class="form-group">
                        <h5>Description</h5>
                        <input type="text" class="form-control" name="desc" value="{{$img->desc}}">
                    </div>
                </div>

                <div class="col-md-12">

                    <input type="hidden" name="cropX" id="cropX">
                    <input type="hidden" name="cropY" id="cropY">
                    <input type="hidden" name="cropWidth" id="cropWidth">
                    <input type="hidden" name="cropHeight" id="cropHeight">
                    <input type="hidden" name="rotate" id="irotate">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="image" style="width:100%" src="/{{$img->file_path}}" alt="Picture">
                        </div>

                </div>

                <div class="col-md-6 mt-3">
                        <button type="button" class="btn btn-dark" id="btn-rotate"><span><i
                                    class="fas fa-sync-alt"></i></span> Rotate</button>

                    <button class="btn btn-dark" type="submit">Save Changes</button>
                   
                </div>

            </div>

        </form>
    </div>
</div>



<script>
$(document).ready(() => {

    var image = $('#image');

    image.cropper({

        crop: function(event) {
           
            $('#cropX').val(event.detail.x);
            $('#cropY').val(event.detail.y);
            $('#cropWidth').val(event.detail.width);
            $('#cropHeight').val(event.detail.height);
        }



    });

    // Get the Cropper.js instance after initialized
    var cropper = image.data('cropper');

    var rotateValue = 0;

    $("#btn-rotate").click(() => {
        rotateValue += 90;
        if (rotateValue == 360) {
            rotateValue = 0;
        }
        cropper.rotateTo(rotateValue);
        //console.log(rotateValue);
        //$('#image').css('transform', `rotate(${rotateValue}deg)`);
        $('#irotate').val(rotateValue);
        //console.log(`rotate(${rotateValue}deg)`);
    });
});
</script>
@endsection