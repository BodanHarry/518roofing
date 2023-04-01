<?php
    $title = "518 Roofing | Services";
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

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Providing Top-Quality Solutions for Your Roofing Needs</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Roof repair</h4>
                        <p class="m-0">This service can include fixing leaks, repairing shingles, fixing flashing, etc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Roof installation</h4>
                        <p class="m-0">This service can include installing new roofs for residential or commercial properties.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Roof maintenance</h4>
                        <p class="m-0">This service can include cleaning gutters, inspecting roofs, and performing routine maintenance to keep the roof in good condition.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Roof replacement</h4>
                        <p class="m-0">This service can include removing old roofs and installing new ones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Flat roofing</h4>
                        <p class="m-0">This service can be provided for commercial buildings that require flat roofs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Types of Services</h1>
            </div>

    <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded-lg wow zoomIn" data-wow-delay="0.1s" src="img/business/img10.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Services</h5>
                        <h1 class="mb-0">Commercial</h1>
                    </div>
                    <p class="mb-4">518 Roofing offers commercial roofing services to businesses in the 518 area.<br> Our team of experts has years of experience in handling commercial roofing projects of various sizes and complexities.<br> We understand that a commercial roof not only needs to look great but also needs to provide the utmost protection to your business and its assets. We provide a wide range of commercial roofing services including installation, repair, and maintenance. Our team uses high-quality materials and state-of-the-art equipment to ensure that the job is done right the first time. We work with our clients to create customized roofing solutions that meet their unique needs and budget. At 518 Roofing, we take great pride in delivering excellent customer service and completing projects on time and within budget. We understand that downtime can be costly for businesses, which is why we work efficiently to minimize any disruption to your operations. Whether you need a new roof installation, repair or maintenance for your commercial property, 518 Roofing has got you covered.<br> Contact us today to schedule a consultation with one of our experts.</p>              
            </div>
        </div>
    </div>

    <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded-lg wow zoomIn" data-wow-delay="0.1s" src="img/business/img11.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Services</h5>
                        <h1 class="mb-0">Residential</h1>
                    </div>
                    <p class="mb-4">518 Roofing offers a wide range of residential roofing services to help homeowners maintain and protect their homes. Whether you need a new roof installed, repairs, or maintenance, our team of experienced professionals has the knowledge and expertise to get the job done right.<br>Our residential roofing services include roof repair, replacement, and installation, as well as inspection and maintenance to keep your roof in top condition. We use only high-quality materials and modern techniques to ensure the longevity and durability of your roof.<br>At 518 Roofing, we understand that your home is one of your biggest investments, and we are committed to providing you with reliable and cost-effective solutions that meet your unique needs and budget. Our goal is to exceed your expectations and provide you with a roofing system that not only looks great but also provides long-lasting protection for your home and family.</p>              
            </div>
        </div>
    </div>

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

    <?php
        include 'partials/bottom.php';
    ?>
</body>

</html>