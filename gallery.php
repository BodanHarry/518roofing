<?php
    $title = "518 Roofing | About us";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php
        include 'partials/metadata.php'
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addons.css" rel="stylesheet">
    <style>
        .img-fluid {
        opacity: 1;
        transition: transform 0.5s, opacity 0.5s;
        }

        .img-fluid:hover {
        opacity: 0.9;
        transform: scale(1.05);
        cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <?php
        include 'partials/top.php'
    ?>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img1.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img2.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img3.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img4.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img5.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img7.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img7.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img8.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img9.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img10.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img11.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">

    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img12.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">

    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img13.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <img src="img/business/img14.jpg" class="img-fluid rounded" onclick="openFullImage(this.src)" alt="">
    </div>
  </div>
</div>

    <div class="imgFull" id="fullbox">
        <img src="main.png" id="fullImg">
        <span onclick="closeImg()">X</span>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/addons.js"></script>
    <script src="js/fullImg.js"></script>

    <?php
        include 'partials/bottom.php';
    ?>
</body>

</html>