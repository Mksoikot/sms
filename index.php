<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <br/>
        <a style="float: right;" class="btn btn-primary pull-right" href="admin/login.php">Login</a>
        <br/>
        <h1 class="text-center">Wellcome To School Managment System</h1>
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                        <form action="" method="post">
            <table class="table table-bordered">
                <tr>
                    <td colspan="2" class="text-center"><label>Student Information</label></td>
                </tr>
                <tr>
                    <td><label for="choose">Choose Class</label></td>
                    <td>
                        <select class="form-control" id="choose" name="choose">
                            <option vlaue="">Select</option>
                            <option vlaue="1">Six</option>
                            <option vlaue="2">Seven</option>
                            <option vlaue="3">Eight</option>
                            <option vlaue="4">Nine</option>
                            <option vlaue="5">Ten</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="roll">Roll</label></td>
                    <td><input class="form-control" type="text" name="roll" pattern="[0-9]{6}" placeholder="Roll"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center"><input  class="btn btn-primary" type="submit" name="show_info" value="Show Info"></td>
                </tr>
            </table>
        </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>