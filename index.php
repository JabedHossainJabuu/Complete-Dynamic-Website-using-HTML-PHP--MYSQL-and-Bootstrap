<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stories Website</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php include('./partials/connect.php'); ?>

  <div class="container-fluid slider">
    <?php
    include('./partials/header.php');
    ?>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="" class="d-block w-100" alt="...">
        </div>
      </div>

    </div>

  </div>

  <div class="container">
    <h1 class="text-center featureTitle mb-5">
      Featured Stories
    </h1>

    <div class="row">

      <?php

      $sql = "SELECT * From `topics`";
      $result = mysqli_query($con, $sql);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['topic_id'];
          $topic_image = $row['topic_image'];
          $topic_name = $row['topic_name'];
          $topic_desc = $row['topic_description'];
          echo ' <div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img src=' . $topic_image . ' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">' . $topic_name . '</h5>
              <p class="card-text">' . substr($topic_desc, 0, 50) . '.......</p>
              <a href="stories.php ? story_id = '.$id.'" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
        </div>';
        }
      }


      ?>


    </div>

  </div>
  </div>
  </div>



  <?php
  include('./partials/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>