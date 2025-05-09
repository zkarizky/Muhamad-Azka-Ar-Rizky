@extends('layouts.main')
@section('container')
    
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

     


    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">jika ada saran dan kritik, bisa hubungi disini.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="home">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>jalan garuda belakang no. 102 RT02/RW05 kelurahan Garuda Kecamatan Andir Kota Bandung Jawa Barat Indonesia 40184 </p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p>083874692644 / 0859131076463</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>arrizkyazka9@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <a href="https://www.instagram.com/zkarizky"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/muhamad-azka-ar-rizky-508b51331/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

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