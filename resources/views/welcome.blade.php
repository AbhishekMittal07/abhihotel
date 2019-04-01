<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
<style>
  HTML::style('css/style.css');
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
  <link rel="stylesheet" href="{{ url('/') }}./css/style.css" type="text/css"/>
</style>
</head>
<body>


   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOTEL@smartData</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">All Hotels</a></li>
      <li><a href="#">Abhishek Mittal</a></li>
      <li><a href="#">Sankalp Pasricha</a></li>
      <li><a href="#">Pankaj</a></li>
    </ul>
  </div>
</nav>


 <div class="container-fluid">
  
  <div class="row">
  <div class="col-sm-3"  style="border-style: solid;border-width: 5px; margin-left: 5px;height:300px;">
  
  <h2>All Hotel</h2>
  <p>Name at the top (card-name-top):</p>
  
  <div class="card" style="width:400px">
    <h1 style="width:100%">Taj</h1>
    <div class="card-body">
      <h4 class="card-title">Name:John Doe</h4>
      <p class="card-text">Description:Some example text some example<br> text. John Doe is an architect and engineer
      </p>
      <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
  </div></div>












</body>
</html>