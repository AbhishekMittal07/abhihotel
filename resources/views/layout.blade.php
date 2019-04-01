<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      <a class="navbar-brand" href="#">Graphics</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Update</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
  </div>
</nav>
  



<div class="container">
	<img src="{{asset('photos')}}/desk.jpeg">
  <center><h2 style="background-color:black; color:white;">Login Forms</h2></center>
  <form action="">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<hr>

<center>@Graphic Era University</center>
<hr>


<hr>
<h1><marquee>Pankaj Joshi</marquee></h1>
<hr>
</body>
</html>
<!--@yield('content')
 
      <ul><li><a href="/about">About Us</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="/user">User</a></li>
      </ul>-->

      