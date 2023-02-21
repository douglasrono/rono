<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Douglas Rono Portfolio: Software Developer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <div id="app">
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

        <header id="header">
            <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/hero-bg.jpg" alt="" class="rounded-circle" width="150px" height="150px">
                <h1 ><a href="/" class="text-warning">Douglas Rono</a></h1>
                <div class="social-links mt-3 text-center">
                <a href="https://github.com/douglasrono" target="blank" class="github"><i class="bx bxl-github"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="/about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="/skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
                <li><a href="/portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="/testimonial" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Testimonial</span></a></li>
                <li><a href="/blog" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Blog</span></a></li>
                <li><a href="/contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; {{ now()->year }} <strong><span>DOUGLAS RONO</span></strong>
      </div>

      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

