@extends('layouts.main')
@section('container')
    
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Resume </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="resume-page">

  

    

      
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Resume</h1>
              <p class="mb-0">ini sedikit riwayat saya</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="home">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>Muhamad Azka Ar Rizky</h4>
              <p><em>Fotografer dan Web Developer berkopetensi dan konsisten.</em></p>
              <ul>
                <li>JL.Garuda belakang no.102, Bandung, Indonesia</li>
                <li>083874692644 / 0959131076463</li>
                <li>arrizkyazka9@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Sekolah Dasar</h4>
              <h5>2014 - 2020</h5>
              <p><em>SDN 056 Garuda Dadali</em></p>
              <p>sekolah dasar yang terletak di jalan Dadali 3 kota Bandung</p>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Sekolah Menengah Pertama</h4>
              <h5>2020 - 2023</h5>
              <p><em>SMPN 23 Bandung</em></p>
              <p>sekolah menengah pertama yang terletak di Ciroyom kota Bandung</p>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Sekolah Menengah Kejuruan</h4>
              <h5>2023 - 2026</h5>
              <p><em>SMKN 11 Bandung</em></p>
              <p>sekolah menengah Kejuruan yang terletak di Jalan Budhi kota Bandung, saya menambil jurusan <strong> Rekayasa Perangkat Lunak</strong> </p>
            </div><!-- Edn Resume Item -->
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Project IoT</h4>
              <h5>2024</h5>
              <p><em>Bandung, Indonesia</em></p>
              <li>dalam projek ini saya dan kelompok saya membuat perangkat cassing HP yang apabila kita terlalu lama menggunakan handphone, maka akan menunjukan beberapa ekspresi seperti marah, sedih, dan kesal. </li>
              
              
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Projek Video Pembelajaran Django</h4>
              <h5>2023 - sekarang</h5>
              <p><em>Bandung, Indonesia</em></p>
              
              <li>dalam projek ini saya berperan sebagai editor. Tujuan video pembelajaran ini adalah untuk akses pendidikan bidang IT di daerah daerah terpencil</li>
              
              
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

  @extends('component.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>