<?php 
/*
Mihkel Rand
09.05.2021
*/
include("connect.php")
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- Custom css -->
    <link href="styles\signin.scss" rel="stylesheet">

    <title>ThoughBoard</title>

  </head>

  <body class="bg-light">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h2>Hello</h2>
          <form action="" method="post">
            <input class="w-20 btn btn-lg btn-primary" type="submit" name="callLogin" value="Login" />
          </form>
          <?php
              if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['callLogin']))
              {
                include("login.php");
                echo("<script>console.log('Login included!');</script>");  
              }  
          ?>
        </div>
      </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
  
