<?php
session_start();
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
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#guide">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#post">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#subscribe">Subscribe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navigation bar  -->
  <!-- start carousel  -->
  <section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active image-no-1">
          <div class="carousel-caption mx-0 px-0">
            <h6 class="">Enjoy Incredible Pleasure</h6>
            <h5 class="display-1 fw-bold">Best Tourist Place In Sylhet</h5>
            <div>
              <button>READ MORE</button>
            </div>
          </div>
          <img src="resources/images/shadow.png" alt="" />
        </div>
        <div class="carousel-item image-no-2">
          <div class="carousel-caption mx-0 px-0">
            <h6 class="fst-italic">Enjoy Incredible Pleasure</h6>
            <h5 class="display-1 fw-bold">Best Tourist Place In Sylhet</h5>
            <div>
              <button>READ MORE</button>
            </div>
          </div>
          <img src="resources/images/shadow.png" alt="" />
        </div>
        <div class="carousel-item image-no-3">
          <div class="carousel-caption mx-0 px-0">
            <h6 class="fst-italic">Enjoy Incredible Pleasure</h6>
            <h5 class="display-1 fw-bold">Best Tourist Place In Sylhet</h5>
            <div>
              <button>READ MORE</button>
            </div>
          </div>
          <img src="resources/images/shadow.png" alt="" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- end carousel  -->
  <!-- start Service section  -->
  <section class="repotation" id="service">
    <div class="container text-center align-content-center">
      <div class="py-5 mt-5">
        <h6 class="title-one">We care about your happiness</h6>
        <h5 class="title-two">why travel with us?</h5>
      </div>
      <div class="row pb-5 text-center">
        <?php
        $service_query = "SELECT * FROM services  LIMIT 4";
        $service_query_db = mysqli_query($db_connect, $service_query);
        foreach ($service_query_db as  $service) : ?>
          <div class="col-lg-3 col-md-6 col-sm-6 py-1">
            <div class="card shadow-sm mx-auto" style="width: 15rem">
              <div class="first-image">
                <img style="height: 8rem" src="../dashboard/upload/service_pic/<?= $service['service_image'] ?>" class="card-img-top" alt="..." />
              </div>
              <div class="second-image">
                <img class="shadow-sm icon" src="resources/images/repo1.png" alt="" />
              </div>
              <div class="card-body">
                <h5 class="text-center fw-bold"><?= $service['service_title'] ?></h5>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>
  <!-- end repotation section  -->
  <!-- start blog section  -->
  <section class="blog py-5">
    <div class="text-center">
      <img class="tmbnil w-100" src="resources/images/img1.png" alt="" />
      <video class="vdo w-50" autoplay muted controls>
        <source src="resources/video/natural2.mp4" type="video/mp4" />
      </video>
    </div>
  </section>
  <!-- end blog section  -->
  <!-- start subscribe section  -->
  <section class="subscribe my-5">
    <div class="container d-flex align-items-center justify-content-between">
      <div>
        <h4 class="text-light fw-bold">
          How Beautiful Is To Do Nothing And Then Rest
        </h4>
      </div>
      <div>
        <button class="text-end">SUBSCRIBE</button>
      </div>
    </div>
  </section>
  <!-- end subscribe section  -->
  <!-- start tour section  -->
  <section class="tour pb-5" id="blog">
    <div class="container">
      <div class="py-5 mt-5 text-center">
        <!-- <img class="bg" src="resources/images/bg.png" alt=""> -->
        <h6 class="title-one">We care about your happiness</h6>
        <h5 class="title-two">LET'S TRAVEL ALL YEAR ROUND</h5>
      </div>
      <div class="d-flex justify-content-center">
        <div class="row text-center w-50 shadow-sm season">
          <div class="col-md-3 pt-3 winter">
            <img src="resources/images/Winter.png" width="46px" alt="" />
            <p class="fw-bold">AURUMN</p>
          </div>
          <div class="col-md-3 pt-3">
            <img src="resources/images/HotSprings.png" alt="" />
            <p class="fw-bold">SPRING</p>
          </div>
          <div class="col-md-3 pt-3">
            <img src="resources/images/Holiday.png" alt="" />
            <p class="fw-bold">SUMMER</p>
          </div>
          <div class="col-md-3 pt-3">
            <img src="resources/images/SwimmerView.png" alt="" />
            <p class="fw-bold">AURUMN</p>
          </div>
        </div>
      </div>
      <div class="row py-5 mt-5 mt-sm-3 d-flex align-items-center">
      <?php
        $blog_query = "SELECT * FROM `blogs` ";
        $blog_query_db = mysqli_query($db_connect, $blog_query);
        $blog = mysqli_fetch_assoc($blog_query_db);
        ?>
        <div class="col-md-6">
          <img width="97%" class="tour-image" src="../dashboard/upload/blog_pic/<?=$blog['blog_image']?>" alt="" />
        </div>
        
        <div class="col-md-6">
          <h4 class="fw-bold"><?=$blog['blog_title']?></h4>
          <p class="peragraph py-3">
            <?=$blog['blog_description']?>
          </p>
          <button>BOOK NOW</button>
        </div>
      </div>
    </div>
  </section>
  <!-- start guide section  -->
  <section class="guide" id="guide">
    <div class="container">
      <div class="text-center">
        <h6 class="title-one">People who create a fairy tale for you</h6>
        <h5 class="title-two">MEET OUR GUIDES</h5>
      </div>
      <div class="row text-center py-5 slider">
        <?php
        $guide_query = "SELECT * FROM `guids` LIMIT 8";
        $guide_query_db = mysqli_query($db_connect, $guide_query);
        foreach ($guide_query_db as $key => $guide) : ?>
          <div class="col-md-10">
            <div class="details d-flex justify-content-center">
              <div>
                <img class="" src="../dashboard/upload/guide_pic/<?= $guide['guide_image'] ?>" alt="" />
                <h5 class="pt-2"><?= $guide['guide_name'] ?></h5>
                <p><?= $guide['guide_title'] ?></p>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>

      </div>
    </div>
  </section>
  <!-- end guide section  -->
  <!-- post section  -->
  <section class="post py-5" id="post">
    <div class="container">
      <div class="text-center">
        <h6 class="title-one">Keep Memories</h6>
        <h5 class="title-two">LATEST POSTS</h5>
      </div>
      <div class="row d-flex justify-content-center pt-5">
        <?php
        $post_query = "SELECT * FROM `posts` LIMIT 3";
        $post_query_db = mysqli_query($db_connect, $post_query);
        
        foreach ($post_query_db as $post) : ?>
          <div class="col-lg-4 py-2">
            <div class="card shadow-sm mx-auto" style="width: 18rem;">
              <img style="height: 12rem" src="../dashboard/upload/post_pic/<?=$post['post_thumbnil']?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title py-1"><?=$post['post_title']?></h5>
                <p class="card-text"><?php
                $post_text = $post['post_description'];
                $limit_txt = substr($post_text, 0, 60) . '....';
                if (strlen($post_text) >= '60') {
                  echo $limit_txt;
                } else {
                  echo $post_text;
                }
                ?></p>
                <a href="./single.php?id=<?=$post['id']?>">Read more <span>&rarr;</span></a>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>
  <!-- post section  -->
  <!-- start email subscription  -->
  <section class="email-subscribe pt-5 mt-3" id="subscribe">
    <div class="text-center inner">
      <h5 class="text-light py-3">Subscribe for travel tips.</h5>
      <form action="">
        <input type="email" placeholder="Enter Your Email" />
        <input type="submit" value="SUBSCRIBE" class="text-light" />
      </form>
    </div>
  </section>
  <!-- end email subscription  -->
  <!-- start contact section  -->
  <section class="contact pt-5 text-light" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pt-5">
          <div class="d-flex justify-content-start px-1">
            <div>
              <img class="logo" src="resources/images/Subtract.png" alt="" />
            </div>
            <div class="logo-txt px-1">
              <h5 class="logo-txt1">SYLHET</h5>
              <p class="text-center logo-txt2">Tourist Place</p>
            </div>
          </div>
          <div>
            <p class="py-3">
              Sylhet is a metropolitan city in northeastern Bangladesh.
            </p>
          </div>
          <?php
          $social_query = "SELECT * FROM `social`";
          $social_query_db = mysqli_query($db_connect, $social_query);
          $social = mysqli_fetch_assoc($social_query_db);
          ?>
          <div>
            <div class="d-flex py-2">
              <i class="fas fa-map-marker-alt align-self-center"></i>
              <p class="align-self-center px-3 m-0">Sylhet, Bangladesh</p>
            </div>
            <div class="d-flex py-2">
              <i class="fas fa-phone-alt align-self-center"></i>
              <p class="align-self-center px-3 m-0"><?=$social['number']?></p>
            </div>
            <div class="d-flex py-2">
              <i class="fa fa-envelope align-self-center"></i>
              <p class="align-self-center px-3 m-0"><?=$social['email']?></p>
            </div>
          </div>
          <div class="pt-4">
            <a href="<?=$social['facebook']?>"><i class="fab fa-facebook pe-3 text-light"></i></a>
            <a href="<?=$social['instagram']?>"><i class="fab fa-instagram pe-3 text-light"></i></a>
            <a href="<?=$social['twitter']?>"><i class="fab fa-twitter pe-3 text-light"></i></a>
            <a href="<?=$social['youtube']?>"><i class="fab fa-youtube pe-3 text-light"></i></a>
          </div>
        </div>
        <div class="col-md-2 pt-5">
          <div>
            <h5>Menu</h5>
          </div>
          <div class="pt-4">
            <ul class="m-2 p-2">
              <li class="py-1"><a href="">Home</a></li>
              <li class="py-1"><a href="">Service</a></li>
              <li class="py-1"><a href="">Blog</a></li>
              <li class="py-1"><a href="">Tours</a></li>
              <li class="py-1"><a href="">Destination</a></li>
              <li class="py-1"><a href="">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 pt-5">
          <div>
            <h5 class="d-inline text-uppercase">For travel with g7-</h5>
            <h5 class="d-inline color text-uppercase">Please contact with us</h5>
          </div>
          <div>
            <form action="../dashboard/contact.php" method="post">
              <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name</label>
                <input type="name" name="visitor_name" class="form-control bg-dark text-light" id="exampleInputname1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="visitor_email" class="form-control bg-dark text-light" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputmsg1" class="form-label">Message</label>
                <textarea class="form-control bg-dark text-light" name="visitor_msg" id="" cols="30" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>
            <?php
            if (isset($_SESSION['success_send'])) { ?>
              <hr>
              <h5 class="text-light"><?= $_SESSION['success_send'] ?></h5>
            <?php
            }
            unset($_SESSION['success_send']);
            ?>
          </div>

        </div>
      </div>
    </div>
    <div class="footer text-center py-4 mt-2">
      <h4>Sylhet, All Right Reserve 2023</h4>
      <p class="lead">Powered by batch 07</p>
    </div>
  </section>
  <!-- end contact section  -->

  <!-- jquery cdn  -->
  <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script> 
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <!-- bootstrap 5 js  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- slick slider cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./resources/js/active.js"></script>
  <script src="resources/js/slick.js"></script>

</body>

</html>