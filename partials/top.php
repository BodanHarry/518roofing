  <?php 
     include('translate.php');
  ?>

<div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light">+15 experience years</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+1 518 495 8083</small>
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>New York, USA</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://wa.me/15184958083">24/7</a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://youtube.com/shorts/a6EDKxYso38?feature=share"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>

        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" id="top-panel">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="img/svg/roofing.svg" id="title-img">
                    518 Roofing</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?php if(str_contains($title,'Home')) echo "active"?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php if(str_contains($title,'About')) echo "active"?>">About</a>
                    <a href="service.php" class="nav-item nav-link <?php if(str_contains($title,'Services')) echo "active"?>">Services</a>
                    <a href="gallery.php" class="nav-item nav-link <?php if(str_contains($title,'Gallery')) echo "active"?>">Gallery</a>
                    <a href="contact.php" class="nav-item nav-link <?php if(str_contains($title,'Contact')) echo "active"?>">Contact</a>
</div>
                <a href="contact.php" class="btn btn-primary py-2 px-4 ms-3">Free estimates</a>
            </div>
        </nav>
    