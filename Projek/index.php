<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penangkal Petir Solutions</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- googleapis -->
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:wght@700;800;900&display=swap"
    rel="stylesheet">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="overflow-visible">
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-black position-sticky z-3">
    <div class="container">
      <!-- logo -->
      <img src="Logo KAT.png" alt="logo" style="height: 7.5vh; width: 7.5vh;">
      <a class="navbar-brand fs-4" href="#">Karya Adhie Teknikatama</a>
      <!-- toggle btn -->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- sidebar -->
      <div class="sidebar offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <!-- sidebar header -->
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Karya Adhie Teknikatama</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <!-- sidebar body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#feedback">Feedback</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- navbar end -->

  <!-- home -->
  <section id="home"
    class="hero vh-100 w-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
    <div class="hero-content">
      <h1>Your Trusted Partner in Lightning Protection</h1>
      <p>We provide top-notch lightning protection solutions for your safety.</p>
      <a href="#contact" class="cta-button shadow-lg">Contact Us</a>
    </div>
  </section>
  <!-- home end -->

  <!-- about -->
  <section id="about"
    class="about w-100 vh-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
    <h1>About Us</h1>
    <div class="container mt-5">
      <div class="row">
        <div class="col pt-4 ">
          <p>We are a leading company in the field of lightning protection installation.
            With years of experience, we ensure the safety of your property against lightning strikes.</p>
        </div>
        <div class="col-3 ">
          <img src="Logo KAT.png" alt="" class="object-fit-contain" style="height: 20vh; width: 20vh;">
        </div>
      </div>
    </div>
  </section>
  <!-- about end -->

  <!-- gallery -->
  <section id="gallery"
    class="gallery w-100 vh-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
    <h1 class="mb-5">Gallery</h1>
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <img src="assets/Picture/img- (1).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (2).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (3).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (4).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (5).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (6).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (7).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (8).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (9).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (10).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (11).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (12).jpg" alt="img" draggable="false">
        <img src="assets/Picture/img- (13).jpg" alt="img" draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
  </section>
  <!-- gallery end -->

  <!-- product -->
  <section id="product"
    class="product w-100 vh-100 d-flex flex-row justify-content-around align-items-center text-white fs-1 gap-5">
    <div class="container gap-5">
      <h2 class="mb-5">Our Product</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/Picture/penangkal petir kurn radius 85.jpeg" class="card-img-top" alt="Service 1">
            <div class="card-body">
              <h5 class="card-title">Paket 1<h5>
                  <p class="card-text">Harga Pemasangan Penangkal Petir KURN R-85 RP 8.500.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/Picture/penangkal petir kurn radius 150.jpeg" class="card-img-top" alt="Service 2">
            <div class="card-body">
              <h5 class="card-title">Paket 2</h5>
              <p class="card-text">Harga Pemasangan Penangkal Petir KURN R-150 RP 9.300.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/Picture/penangkal petir  thomas r 125.jpeg" class="card-img-top" alt="Service 3">
            <div class="card-body">
              <h5 class="card-title">Paket 3</h5>
              <p class="card-text">Harga Pemasangan Penangkal Petir THOMAS R-125 RP 14.500.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product end -->

  <!-- feedback -->

  <section id="feedback" class="feedback py-5 text-white">
    <div class="container">
      <h2 class="mb-4">Feedback</h2>
      <form action="feedback.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@gmail.com" name="email" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="3" placeholder="Your Message" name="pesan" required></textarea>
        </div>
        <input type="submit" class="cta-button1" name="submit" value="Submit" />
      </form>
    </div>
    <?php if (isset($_GET['status'])): ?>
      <p>
        <?php
        if ($_GET['status'] == 'sukses') {
          echo '<script>alert("Terima kasih atas saran anda")</script>';
        } else {
          echo '<script>alert("gagal!")</script>';
        }
        ?>
      </p>
    <?php endif; ?>
  </section>
  <!-- feedback end -->

  <!-- contact -->
  <section id="contact" class="contact">
    <h1>Contact Us</h1>
    <p>Have a question or need a quote? Feel free to get in touchx.</p>
    <ul class="d-flex flex-row justify-content-around align-items-center text-white fs-1 gap-5"
      style="list-style: none;">
      <li class="p-5">
        <h3>LOKASI</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.080790551901!2d107.05842427509562!3d-6.2530857937354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698dffaa3e87c9%3A0x7f0f671bf57691ae!2sSMK%20TELEKOMUNIKASI%20TELESANDI%20BEKASI!5e0!3m2!1sid!2sid!4v1699844678093!5m2!1sid!2sid"
          width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </li>

      <li class="p-5 flex-row">
        <h3>KONTAK</h3>
        <div class="contact-text">
          <p>Telp : 0895 xxxx xxxx</p>
          <p>Alamat : Desa, Mekarsari, Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 17510</p>
          <a href="mailto:bm4651030@gmail.com" class="cta-button1">Email Us</a>
        </div>
      </li>

      <li class="p-5">
        <h3>SOSIAL MEDIA</h3>
        <div class="contact-text">
          <div class="icons">
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://api.whatsapp.com/send?phone=6289505123663"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="https://www.instagram.com"><i class='bx bxl-instagram-alt'></i></a>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- contact end -->

  <!-- footer -->
  <footer>
    <p>&copy; 2023 Penangkal Petir Solutions. All rights reserved.</p>
  </footer>
  <!-- footer end -->

  <script src="script.js"></script>

  <!-- boxicon -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>