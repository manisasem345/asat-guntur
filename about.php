<?php
session_start();
// Cek apakah pengguna sudah login
include 'connect_db.php';
$ambildata = mysqli_query($conn, "SELECT * FROM biodata ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($ambildata);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Kelly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets2/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  .img-square {
    width: 100%;
    /* atau bisa fixed: 300px; */
    aspect-ratio: 1 / 1;
    /* bikin kotak 1:1 */
    object-fit: cover;
    /* biar gambarnya tetap penuh */
  }
</style>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets2/img/logo.png" alt=""> -->
        <h1><?php echo htmlspecialchars($data['nama_depan']); ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p><?php echo htmlspecialchars($data['tentang']); ?></p>
      </div><!-- End Section Title -->

      <?php
      // Hitung usia dari tgl_lahir
      $tgl_lahir = new DateTime($data['tgl_lahir']);
      $sekarang = new DateTime();
      $usia = $sekarang->diff($tgl_lahir)->y;
      ?>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="uploads/<?php echo htmlspecialchars($data['url_foto']); ?>" class="img-square" alt="Foto Profil">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo htmlspecialchars($data['profesi']); ?></h2>
            <p class="fst-italic py-3">
              <?php echo htmlspecialchars($data['deskripsi_profesi']); ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                    <span><?php echo htmlspecialchars($data['tgl_lahir']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                    <span><?php echo htmlspecialchars($data['website']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                    <span>+<?php echo htmlspecialchars($data['hp']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                    <span><?php echo htmlspecialchars($data['kota']); ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $usia; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                    <span><?php echo htmlspecialchars($data['gelar']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                    <span><?php echo htmlspecialchars($data['email']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                    <span><?php echo htmlspecialchars($data['freelance']); ?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              <?php echo htmlspecialchars($data['keterangan_about']); ?>
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p> <?php echo htmlspecialchars($data['keterangan_skill']); ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <?php
          $skillData = explode(',', $data['skill']); // pisahkan berdasarkan koma
          $skills = [];

          for ($i = 0; $i < count($skillData); $i += 2) {
            $skills[] = [
              'name' => trim($skillData[$i]),
              'value' => intval(trim($skillData[$i + 1], "% "))
            ];
          }
          ?>
          <div class="row skills-content skills-animation">

            <div class="col-lg-6">
              <?php for ($i = 0; $i < ceil(count($skills) / 2); $i++): ?>
                <div class="progress">
                  <span class="skill"><span><?php echo htmlspecialchars($skills[$i]['name']); ?></span> <i
                      class="val"><?php echo $skills[$i]['value']; ?>%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['value']; ?>"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>

            <div class="col-lg-6">
              <?php for ($i = ceil(count($skills) / 2); $i < count($skills); $i++): ?>
                <div class="progress">
                  <span class="skill"><span><?php echo htmlspecialchars($skills[$i]['name']); ?></span> <i
                      class="val"><?php echo $skills[$i]['value']; ?>%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['value']; ?>"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelly</strong> <span>All Rights Reserved<br></span>
        </p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>
  <script src="assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>