<?php 
  require_once "./dbcon.php";
session_start();

if(isset($_SESSION['user_login'])){
  header('location: index.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username_check = mysqli_query($link,"SELECT * FROM `users` WHERE `username`= '$username';");
    if (mysqli_num_rows($username_check) > 0) {
      $row = mysqli_fetch_assoc($username_check);
      if ($row['password']== md5($password)) {
        if ($row['status']== 'active') {
          $_SESSION['user_login'] = $username;
          header('location: index.php');
        }else{
          $status = "Your Status Inactive";
        }
      }else{
         $wrong_password = "This Password Wrong";
      }
    }else{
      $username_not_found = "This Username Not Found";
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
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>SMS.LOGIN</title>
  </head>
  <body>
    <div class="container animate__animated animate__pulse">
      <h1 class="text-center">Student Managment System</h1>
      <br>
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
          <h2 class="text-center">Admin Login Form</h2>
          <form action="login.php" method="post">
            <div>
              <input type="text" placeholder="Username" name="username" class="form-control" required="" value="<?php if(isset($username)){echo $username;} ?>">
            </div>
            <br>
              <div>
              <input type="password" placeholder="Password" name="password" class="form-control" required="" value="<?php if(isset($password)){echo $password;} ?>" >
            </div>
            <br>
            <div>
              <a href="registation.php">Back</a>
              <input style="float: right;" type="submit" value="Submit" name="login" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
      <br>
      <?php if (isset($username_not_found)) {
        echo '<div class="alert alert-danger col-sm-4 offset-sm-4">'.$username_not_found.'</div>';
      } ?>
      <?php if (isset($wrong_password)) {
        echo '<div class="alert alert-danger col-sm-4 offset-sm-4">'.$wrong_password.'</div>';
      } ?>
        <?php if (isset($status)) {
        echo '<div class="alert alert-danger col-sm-4 offset-sm-4">'.$status.'</div>';
      } ?>
    </div>

  </body>
</html>