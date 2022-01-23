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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="../assets/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript" src="../assets/js/script.js"></script>

    <title>SMS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user"></i> Welcome</a>
            <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user-plus"></i> Add User</a>
            <a class="nav-link" href="#" style="color: #181818;"><i class="fa fa-user"></i> Profile</a>
            <a class="nav-link" href="logout.php" style="color: #181818;"><i class="fa fa-power-off"></i> Logout</a>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="index.php?page=dashboard"class="list-group-item active"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <a href="index.php?page=add_student" class="list-group-item"><i class="fa fa-user-plus"></i> Add Student</a>
                    <a href="index.php?page=all_student" class="list-group-item"><i class="fa fa-users"></i> All Student</a>
                    <a href="index.php?page=all_user" class="list-group-item"><i class="fa fa-users"></i> All Users</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">

             <?php 
                  
                  if(isset($_GET['page'])){
                    $page = $_GET['page'].'.php';
                  }else{
                    $page = "dashboard.php";
                  }

                  if(file_exists($page)){
                    require_once $page;
                  }else{
                    require_once "404.php";
                  }
             ?>

                </div>
            </div>
        </div>
    </div>
    </div>
<footer class="footer-area">
  <p>Copyright &copy; 2021 Students Management Systems.All Right Are Reserved</p>
</footer>

</body>

</html>