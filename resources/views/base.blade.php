<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mosaic/0.131/jquery.mosaic.min.css" integrity="sha256-6f1IGb6GqOU1EMkeYOjFKJIksPEK/qEFVlBKGbEaTGk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/css/fileinput.css" integrity="sha256-DQU6yrp4ySroKr/kpZm7c03Ac483k2L3NpoKmwdOlcc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    @yield('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/fileinput.js" integrity="sha256-gBMxvh5TatVGO6+k+QUIsmB2hoDh9C4QDmARBh1fLt8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-cropper@1.0.1/dist/jquery-cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/themes/explorer-fa/theme.js" integrity="sha256-6xUghzXrfuxXJlRVGxnb90t+VUVOpOenvTZ3RKK2rD8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mosaic/0.131/jquery.mosaic.min.js" integrity="sha256-WzsUI3NKoKtqLHi5hIa2z9/gR910e++7lzuiL0W/QP8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js" integrity="sha256-3Iu0zFU6cPS92RSC3Pe4DBwjIV/9XKyzYTqKZzly6A8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
    <style>
       .container{
        margin-top:2vh;
       }
       .desc{
        margin-top:3.5vh;
       }
    </style>
</head>
<body>
    @yield('nav')

    <div class="container">
         @yield('Vehicles')
    </div>
    
    <div class="container">
            @yield('Animal')
    </div>

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-10 mt-2">
                    @yield('cont')
                </div>
            </div>
     </div>
    
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-10 col-sm-10 mt-2">
                    @yield('content')
                </div>
        </div>
    </div>

    @yield('script')
</body>
</html>