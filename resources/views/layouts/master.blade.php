<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')
  <!-- Footer -->
<div class="container-fluid">
  <div class="row">
    <div class="col bg-dark">Lorem ipsum dolor sit amet, cibo sensibus interesset no sit. Et dolor possim volutpat qui. No malis tollit iriure eam, et vel tale zril blandit, rebum vidisse nostrum qui eu. No nostrud dolorem legendos mea, ea eum mucius oporteat platonem.Eam an case scribentur, ei clita causae cum, alia debet eu vel.</div>
    <div class="col bg-dark">.col</div>
    <div class="col bg-dark">.col</div>
  </div>
</div>
<!-- Footer -->
 </body>
</html>