<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Seragam Budi Jaya</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <?php
    $footerPath = 'footer.html';
    ?>

  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Budi<span>Jaya</span>.</a>

      <!-- Kumpulan elemen nav -->
      <div class="navbar-nav">
        <a href="#men" class="poppins-regular">Men</a>
        <a href="#women" class="poppins-regular">Women</a>
        <a href="#collection" class="poppins-regular">Collection</a>
        <a href="#about" class="poppins-regular">Tentang Kami</a>
        <a href="#kontak" class="poppins-regular">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-bag"><i data-feather="shopping-bag"></i></a>
        <a href="#" id="login"><i data-feather="log-in"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->



<!-- Footer Start -->
<?php include_once($footerPath); ?>
<!-- Footer End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript Navbar-->
    <script src="js/navbarscript.js"></script>

  </body>
</html>