
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
              <input type="text" placeholder="Username" name="user" class="form-control" required="">
            </div>
            <br>
              <div>
              <input type="password" placeholder="Password" name="pass" class="form-control" required="">
            </div>
            <br>
            <div>
              <a href="registation.php">Back</a>
              <input style="float: right;" type="submit" value="Submit" name="value" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
      
    </div>

  </body>
</html>