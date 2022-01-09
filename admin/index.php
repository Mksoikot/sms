<?php 
session_start();

if(!isset($_SESSION['user_login'])){
	header('location: login.php');
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <title>SMS</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
    </ul>
 <!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
      <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user"></i> Welcome</a>
     <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user-plus"></i> Add User</a>
      <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user"></i> Profile</a>
       <a class="nav-link" href="logout.php" style="color: #181818;"><i class="fa fa-power-off"></i> Logout</a>
  </div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
<ul class="list-group">
	<li class="list-group-item active"><i class="fa fa-dashboard"></i> Dashboard</li>
	<li class="list-group-item"><i class="fa fa-user-plus"></i> Add Student</li>
	<li class="list-group-item"><i class="fa fa-users"></i> All Student</li>
	<li class="list-group-item"><i class="fa fa-users"></i> All Users</li>	  
</ul>
		</div>
		<div class="col-sm-9">
			<div class="content">
				<h1 class="text-primary">Dashboard <span style="font-size: 20px;color: gray;">Statistics Overview</span></h1>
			</div>
		</div>
	</div>
</div>


  </body>
</html>