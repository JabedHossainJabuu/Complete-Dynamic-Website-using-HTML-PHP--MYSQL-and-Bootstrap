<!DOCTYPE html>
<html lang="en">

</html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stories</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
  <?php include('./partials/connect.php'); ?>
  <?php include('./partials/header.php'); ?>

  <div class="container-fluid">
    <div class="jumbotron bg-warning rounded">

      <div class="container">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
          featured content or information.</p>

        <button class="btn btn-dark">
          <a class="text-light" href="#" role="button">Continue Reading</a>
        </button>
      </div>
    </div>
  </div>


  <div class="container-fluid slider">
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
    <div class="jumbotron jumbotron-fluid bg-warning rounded">

      <div class="container">
        <h1 class="display-4 text-center">Enjoy Reading</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
          featured content or information.</p>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Quidem porro nam delectus vel aspernatur mollitia tempore, 
            eligendi magnam aliquam unde dolore sapiente corporis repellat 
            nulla repudiandae magni corrupti ipsa ratione sequi eum. Provident 
            magnam hic, blanditiis consectetur quisquam vitae aperiam corporis 
            adipisci iusto officiis dolores vero amet non eum accusamus commodi 
            minima? Aspernatur natus suscipit quod accusamus corrupti dolore ut 
            tempora nulla modi laboriosam fuga iure, quia ab vel. Dignissimos 
            maxime consectetur, repudiandae error incidunt debitis, sunt provident,
            velit accusantium autem quo aspernatur magnam id tempora fuga sint 
            cumque quos quam unde quia a iure. Autem aliquam alias dolorum nobis a 
            ab ut facilis voluptatum? Rem molestiae saepe dignissimos est sequi mollitia 
            maiores sint modi eius? Aliquam error atque quasi, blanditiis eveniet voluptate 
            incidunt cumque, deleniti quas praesentium accusamus at qui? Iure inventore consequatur, 
            quibusdam aperiam magnam natus quidem. Sint inventore odit quisquam accusantium consequatur 
            maxime placeat, iure reiciendis sequi enim, ex ipsam ipsum molestiae in eius fugit fugiat laboriosam 
            suscipit, corporis cum nobis. Minus, a quidem saepe reiciendis officia dolores explicabo doloribus dicta 
            voluptatum. Consectetur tempora quam natus beatae itaque voluptatibus nostrum, nesciunt corrupti nemo 
            libero fugiat, aspernatur explicabo optio nam temporibus 
            est id laudantium consequatur! Pariatur, dolor hic!
          </p>

      </div>
    </div>
  </div>



  <?php include('./partials/footer.php'); ?>


</body>


</html>