

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ShoesSport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">

      <div class="col-lg-6 text-center text-lg-right">

        <div class="d-inline-flex align-items-center d-block d-lg-none">
          <a href="" class="btn px-0 ml-2">
            <i class="fas fa-heart text-dark"></i>
            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
          </a>
          <a href="" class="btn px-0 ml-2">
            <i class="fas fa-shopping-cart text-dark"></i>
            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
      <div class="col-lg-4">
        <a href="" class="text-decoration-none">
          <span class="h1 text-uppercase text-primary bg-dark px-2">Shoes</span>
          <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Sport</span>
        </a>
      </div>
      <div class="col-lg-4 col-6 text-left">
        <form action="">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari produk">
            <div class="input-group-append">
              <span class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="d-inline-flex align-items-center">
      <?php
            session_start()
            ?>

            <a class="nav-link" type="button" href="profil.php" style="color:black ;"><?= $_SESSION['username']; ?></a>

      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
          <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Kategori</h6>
          <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
          <div class="navbar-nav w-100">
            <a href="nike.php" class="nav-item nav-link">Nike</a>
            <a href="" class="nav-item nav-link">Adidas</a>
            <a href="" class="nav-item nav-link">Puma</a>
            <a href="" class="nav-item nav-link">Reebok</a>
            <a href="" class="nav-item nav-link">NewBalance</a>
            <a href="" class="nav-item nav-link">Converse</a>
            <a href="" class="nav-item nav-link">Asics</a>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
          <a href="" class="text-decoration-none d-block d-lg-none">
            <span class="h1 text-uppercase text-dark bg-light px-2">Shoes</span>
            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Sport</span>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="index.php" class="nav-item nav-link">Homepage</a>
              <a href="shop.php" class="nav-item nav-link">Produk</a>

              <a href="cart.php" class="nav-item nav-link">Keranjang</a>
              <a href="profil.php" class="nav-item nav-link active">Profil</a>
              <div class="nav-item dropdown">

              </div>

            </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- Navbar End -->


  <!-- Breadcrumb Start -->
  <div>
    <div class="main-body">

      <!-- Breadcrumb -->
      <div class="container">
        <nav aria-label="breadcrumb" class="main-breadcrumb">
          <ol class="breadcrumb">

            <li class="breadcrumb-item text-dark">Profil</li>
            <link href="css/style.css" rel="stylesheet">
          </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row">
          <div class="col-md-4">
            <div class="card rounded">
              <div class="card-body" style="margin-bottom: 15px;">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="img/profil.jpeg" alt="User" class="rounded-circle" width="150" height="">
                  <div class="mt-3">
                    <h4>MhmdZaki</h4>
                    <p class="text-muted font-size-sm">Jl Ternate GG 1 No 22 RT 05 RW 02</p>
                    <a class="btn btn-primary" href="login.php" style="color:black ;" onclick="return confirm('Apakah anda yakin untuk Logout?')">Logout</a>
                    <span class="invisible"><br>g</span>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card rounded">
              <div class="col-md-12 mt-4 text-right">
                <a class="btn btn-info rounded" href="editprofil.php">Edit</a>
              </div>
              <div class="card-body">

                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nama Lengkap</h6>
                  </div>
                  <div class="col-sm-5">
                    <h6 class="mb-0">Muhammad Zaki Asy'ari</h6>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-5">
                    <h6 class="mb-0">muhammadzaki9786@gmail.com</h6>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">No Telepon</h6>
                  </div>
                  <div class="col-sm-5">
                    <h6 class="mb-0">085646651029</h6>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Alamat</h6>
                  </div>
                  <div class="col-sm-5">
                    <h6 class="mb-0">JL Ternate GG 1 RT 05 RW 02 </h6>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Jenis Kelamin</h6>
                  </div>
                  <div class="col-sm-5">
                    <h6 class="mb-0">Laki-laki</h6>
                  </div>
                </div>
                <hr>
                <div class="row">

                </div>
              </div>
            </div>






          </div>
        </div>
      </div>

      <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
          <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Tentang Kamii</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jl. Tanimbar No.22, Kasin, Kec. Klojen</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>shoessport@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>085646651029</p>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="row">



            </div>
          </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
          <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
              &copy; <a class="text-primary" href="#">ShoesSport</a>. All Rights Reserved. Designed
              by
              <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
            </p>
          </div>

        </div>
      </div>
      <!-- Footer End -->


      <!-- Back to Top -->



      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>

      <!-- Contact Javascript File -->
      <script src="mail/jqBootstrapValidation.min.js"></script>
      <script src="mail/contact.js"></script>

      <!-- Template Javascript -->
      <script src="js/main.js"></script>

    </div>
  </div>
</body>

</html>