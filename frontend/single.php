<?php
require_once('../db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Travel With G7</title>
  <link href="resources/css/style.css" rel="stylesheet" />
  <!-- bootstrap 5 css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet" />
  <!-- slick carousel slider plugin cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ico  -->
  <link rel="icon" type="image/png" sizes="32x32" href="./resources/images/logo.png" />
  <!-- font awesome 5 cdn  -->
  <script src="https://kit.fontawesome.com/af8acfa6da.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- start navigation bar  -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">TRAVEL WITH G7</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#guide">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#post">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#subscribe">Subscribe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navigation bar  -->
  <?php
  $id = $_GET['id'];
  print_r($id);
  $post_query = "SELECT * FROM `posts` WHERE id=$id";
  $post_query_db = mysqli_query($db_connect, $post_query);
  $posts = mysqli_fetch_assoc($post_query_db);
  ?>
  <section>
    <div class="container pt-5 mt-5">
      <div class="card mb-3">
        <img class=" w-50 mx-auto" src="../dashboard/upload/post_pic/<?=$posts['post_thumbnil']?>" alt="">
        <div class="card-body py-5">
          <h5 class="card-title text-center fw-bold"><?=$posts['post_title']?></h5>
          <p class="card-text"><?=$posts['post_description']?></p>
        </div>
      </div>
    </div>

  </section>
  <!-- jquery cdn  -->
  <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <!-- bootstrap 5 js  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- slick slider cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./resources/js/active"></script>
  <script src="resources/js/slick.js"></script>
</body>

</html>