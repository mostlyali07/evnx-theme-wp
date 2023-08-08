<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Evnx Theme WP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <!-- Section One Start-->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators (optional) -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="./images/main-banner.png" alt="Slide 1" class="d-block w-100" />
        <div class="carousel-caption">
          <h3>
            TEIXEIRA <br />
            ADVENTURE
          </h3>
          <p>
            ADVANCED POLYCARBONATE <br />
            COMPOSITE SHELL
          </p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="./images/main-banner.png" alt="Slide 2" class="d-block w-100" />
        <div class="carousel-caption">
          <h3>
            TEIXEIRA <br />
            ADVENTURE
          </h3>
          <p>
            ADVANCED POLYCARBONATE <br />
            COMPOSITE SHELL
          </p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="./images/main-banner.png" alt="Slide 3" class="d-block w-100" />
        <div class="carousel-caption">
          <h3>
            TEIXEIRA <br />
            ADVENTURE
          </h3>
          <p>
            ADVANCED POLYCARBONATE <br />
            COMPOSITE SHELL
          </p>
        </div>
      </div>
    </div>

    <!-- Navigation Arrows (optional) -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <span class="share-btn">
    <img src="./images/share.png" alt="Share" />
  </span>
  <!-- Section One End -->

  <!-- Section Two Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="center-pro">
          <i class="fa-solid fa-arrow-left"></i>
          <h2>New Products</h2>
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div id="myCarousel" class="owl-carousel owl-theme">
          <div class="item">
            <div class="row">
              <h3>
                HJC CL-17 CAPTAIN <br />
                AMERICA (SNELL)
              </h3>
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <p class="fw-bold fs-3">$350.5</p>
                  <button class="btn-org">Buy now</button>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="./images/slider-helmetThree.png" alt="Image 1" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <h3>
                HJC CL-17 CAPTAIN <br />
                AMERICA (SNELL)
              </h3>
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <p class="fw-bold fs-3">$350.5</p>
                  <button class="btn-org">Buy now</button>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="./images/slider-helmetTwo.png" alt="Image 1" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <h3>
                HJC CL-17 CAPTAIN <br />
                AMERICA (SNELL)
              </h3>
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <p class="fw-bold fs-3">$350.5</p>
                  <button class="btn-org">Buy now</button>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="./images/slider-helmetOne.png" alt="Image 1" width="120" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section Two End -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        items: 3,
        loop: true,
        nav: false,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
          0: {
            items: 1,
          },
          576: {
            items: 2,
          },
          768: {
            items: 3,
          },
        },
        dots: false,
      });
    });
  </script>
</body>

</html>