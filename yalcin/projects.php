<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ürünlerimiz - Yalçıner Mobilya</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="projects-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

       <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Yalçıner Mobilya</h1> <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" >Ana Sayfa</a></li>
          <li><a href="about.html">Hakkımızda</a></li>
          <li><a href="services.html">Hizmetlerimiz</a></li>
          <li><a href="project-details.html">Tamirat/Tadilat</a></li>
          <li><a href="projects.php" class="active">Ürünlerimiz</a></li>
          <li><a href="contact.html">İletişim</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Ürünlerimiz</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Ana Sayfa</a></li>
            <li class="current">Ürünlerimiz</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Projects Section -->
     <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Projeler</h2>
        <p>Kişiye özel projelerimizle hizmetinizdeyiz</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Galerimiz</li>
           <!-- <li data-filter=".filter-remodeling">Örnekler</li>
            <li data-filter=".filter-construction">İskeletler</li>
            <li data-filter=".filter-repairs">Kumaşlar</li>
            <li data-filter=".filter-design">Süngerler</li>
            <li data-filter=".filter-model">Kumaş modelleri</li>
          End Portfolio Filters -->
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


           <?php
     $files = glob("galeri/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
            //echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            echo "<div class='col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling'>
              <div class='portfolio-content h-100'>
                <img src='".$image."' class='img-fluid' alt='".basename($image)."'>
                <div class='portfolio-info'>
                  <h4>".basename($image)."</h4>
                  <a href='".$image."' title='".basename($image)."' data-gallery='portfolio-gallery-app' class='glightbox preview-link'><i class='bi bi-zoom-in'></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->";
             //echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
            } else {
                continue;
            }
          }
       ?>
            

           
           

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Projects Section -->


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Yalçıner Mobilya</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Ulubey, Karpuzlu-2 Cd. No:131/1, 06360 Altındağ/Ankara</p>
            <p>Ankara/Siteler</p>
            <p class="mt-3"><strong>Telefon:</strong> <span>+90 536 320 08 84</span></p>
            <p><strong>Eposta:</strong> <span>...</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Gezgin</h4>
          <ul>
            <li><a href="index.html">Ana Sayfa</a></li>
            <li><a href="about.html">Hakkımızda</a></li>
            <li><a href="services.html">Hizmetler</a></li>
            <li><a href="project-details.html">Tamirat/Tadilat</a></li>
            <li><a href="projects.php">Ürünlerimiz</a></li>
            <li><a href="contact.hmtl">İletişim</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hizmetler</h4>
          <ul>
            <li><a href="#">Kişiselleştirilebilir Mobilyalar</a></li>
            <li><a href="#">Aracı YOK!</a></li>
            <li><a href="#">Kargo Hizmeti</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Yalçıner Mobilya</strong> <span>Bütün haklar saklıdır 2024</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by Muhammet İsmail YANIK
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>