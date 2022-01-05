
<?php

require_once "./dbcon.php";

  if (isset($_POST['registation'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['c-pass'];

    $photo = explode('.', $_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $username.'.'.$photo;

    $input_eror = array();
    if (empty($name)) {
      $input_eror['name'] = "The Name fields Is Required";
    }
     if (empty($email)) {
      $input_eror['email'] = "The email fields Is Required";
    }
     if (empty($username)) {
      $input_eror['username'] = "The username fields Is Required";
    }
     if (empty($password)) {
      $input_eror['password'] = "The password fields Is Required";
    }
     if (empty($cpass)) {
      $input_eror['c_pass'] = "The confirm password fields Is Required";
    }
    if(count($input_eror)==0){
      $email_check = mysqli_query($link,"SELECT * FROM `users` WHERE email = '$email';");
      // print_r( $email_check);
      if(mysqli_num_rows($email_check)==0){
        $username_check = mysqli_query($link,"SELECT * FROM `users` WHERE username = '$username';");
        if (mysqli_num_rows($username_check)==0) {
          $username_error = "This Username Already Exists";
        }
      }else{
        $email_error = "This Email Address Already Exists";
      }
      
    }
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>User Registation Form</title>
  </head>
  <body>
    <div class="container">
      <h1 class="">User Registation Form</h1>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group row">
        <label for="name" class="col-sm-1 col-form-label col-form-label-sm">Name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Enter Your Name" value="<?php if(isset($name)){echo $name;} ?>">
        </div>
        <div class="col-sm-4">
        <label class="error">
            <?php if (isset($input_eror['name'])) { 
              echo $input_eror['name'];
            }
            ?>
            </label>
          </div>
      </div>
      <br>
          <div class="form-group row">
        <label for="email" class="col-sm-1 col-form-label col-form-label-sm">Email</label>
        <div class="col-sm-4">
            <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Enter Your email" value="<?php if(isset($email)){echo $email;} ?>">
        </div>
         <div class="col-sm-4">
        <label class="error">
            <?php if (isset($input_eror['email'])) { 
              echo $input_eror['email'];
            }
            ?>
            </label>
            <label class="error">
            <?php if (isset($email_error)) { 
              echo $email_error;
            }
            ?>
            </label>
          </div>
      </div>
      <br>
          <div class="form-group row">
        <label for="username" class="col-sm-1 col-form-label col-form-label-sm">Username</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" name="username" id="username" placeholder="Enter Your username" value="<?php if(isset($username)){echo $username;} ?>">
        </div>
         <div class="col-sm-4">
        <label class="error">
            <?php if (isset($input_eror['username'])) { 
              echo $input_eror['username'];
            }
            ?>
            </label>
          </div>
      </div>
      <br>
          <div class="form-group row">
        <label for="password" class="col-sm-1 col-form-label col-form-label-sm">Password</label>
        <div class="col-sm-4">
            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Enter Your password" value="<?php if(isset($password)){echo $password;} ?>">
        </div>
         <div class="col-sm-4">
        <label class="error">
            <?php if (isset($input_eror['password'])) { 
              echo $input_eror['password'];
            }
            ?>
            </label>
          </div>
      </div>
      <br>
          <div class="form-group row">
        <label for="c-pass" class="col-sm-1 col-form-label col-form-label-sm">Confirm password</label>
        <div class="col-sm-4">
            <input type="password" class="form-control form-control-sm" name="c-pass" id="c-pass" placeholder="Enter Your Confirm password" value="<?php if(isset($cpass)){echo $cpass;} ?>">
        </div>
         <div class="col-sm-4">
        <label class="error">
            <?php if (isset($input_eror['c_pass'])) { 
              echo $input_eror['c_pass'];
            }
            ?>
            </label>
          </div>
      </div>
      <br>
          <div class="form-group row">
        <label for="photo" class="col-sm-1 col-form-label col-form-label-sm">Photo</label>
        <div class="col-sm-4">
            <input type="file" class="form-control form-control-sm" name="photo" id="photo">
        </div>
      </div>
      <br>
      <div class="col-sm-4 offset-sm-2">
        <input type="submit" value="Registation" name="registation" class="btn btn-primary">
      </div>
          </form>
        </div>
      </div>
      <br>
      <p>If you have an account?then plase <a href="login.php">Login</a></p>
    <hr>
    <footer>
      <p>Copyright &copy; 2016 <?= date('Y'); ?> All Rights Reserved</p>
    </footer>
    </div>

  </body>
</html>