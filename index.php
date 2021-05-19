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
    <link href="styles\custom.scss" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8b4c0a6f08.js" crossorigin="anonymous"></script>

    <title>ThoughBoard</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">ThoughtBoard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>          
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="nav-link" href="login.php">Log in</a>
            </li>              
          </ul>
        </div>
      </div>
    </nav>

    <main>   
      <section class="py-5 text-center container-fluidcover">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Organize your thoughts!</h1>
            <div id="text" class="lead text-muted"></div><div id="cursor"></div>
          </div>
        </div>
      </section>      
      <div class="container-fluid py-4 frontpage-container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-6 color-white">
              <h2 class="fw-light pb-3">Gather your ideas from anywhere!</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum non perferendis modi. Asperiores iure blanditiis quis itaque quidem illum.
                Qui minus aspernatur illo cupiditate iste alias tenetur quibusdam commodi praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nam, non unde. Minus deleniti dicta provident culpa quod eius est et, rem ullam sapiente quo repellendus fugit quisquam ipsa amet vel?
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum non perferendis modi. Asperiores iure blanditiis quis itaque quidem illum.
                Qui minus aspernatur illo cupiditate iste alias tenetur quibusdam commodi praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nam, non unde. Minus deleniti dicta provident culpa quod eius est et, rem ullam sapiente quo repellendus fugit quisquam ipsa amet vel? Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Sint deleniti eligendi pariatur veritatis quidem, est, dolore voluptates alias voluptatibus
                error maxime molestias nam? Adipisci praesentium sequi tempore molestiae nemo vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                sint laborum fugiat sunt eius cumque, aliquid veritatis adipisci.
              </p>
            </div>
            <div class="col-md-6">
              <img class="img-fluid frontpage-img" src="img/frontpage-img1.jpg" alt="image of a laptop being used">
            </div>          
          </div>
        </div>
        <!-- Old content that I might need later
        <div class="container text-center">
          <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-3">
              <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
              </div>
            </div>
          </div>
        </div>        
        -->

      </div>
    </main>

    <!-- Custom script -->
    <script src="js/custom.js"></script>   
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
  
