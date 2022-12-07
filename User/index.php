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
                <div class="d-inline-flex align-items-center">


                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="cart.html" class="btn px-0 ml-2">
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
                            <a class="input-group-text bg-transparent text-primary" href="nike.php">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <?php
            session_start()
            ?>

            <a class="nav-link" type="button" href="profil.php" style="color:black ;"><?= $_SESSION['username']; ?></a>


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
                            <a href="index.php" class="nav-item nav-link active">Homepage</a>
                            <a href="shop.php" class="nav-item nav-link">Produk</a>
                            <a href="cart.php" class="nav-item nav-link">Keranjang</a>
                            <a href="profil.php" class="nav-item nav-link">Profil</a>
                            <div class="nav-item dropdown">
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/Nike1.jfif" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Nike</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Sepatu olahraga ber-merk Nike, merupakan salah satu kegemaran bagi semua kaum</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="nike.php">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/Adidas1.jfif" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Adidas</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Adidas, adalah sepatu brand lokal yang sudah dikenal diseluruh dunia dan sangat fleksibel untuk dipakai</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                        x
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/Nike2.jfif" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Promo 20%</h6>
                        <h3 class="text-white mb-3">Spesial Pembelian</h3>
                        <a href="" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/Nike3.jfif" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Promo 25%</h6>
                        <h3 class="text-white mb-3">Spesial Pembelian</h3>
                        <a href="" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->

    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Kategori</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="nike.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/Nike.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Nike</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/adidas.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Adidas</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/converse.png" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Converse</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/nb1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>New Balance</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/puma.png" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Puma</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/Reebok.png" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Reebok</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/asics.jfif" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Asics</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="shop.html">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="font-size: 50%;">
                            <h6>Semua</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Produk</span></h2>
        <div class="row px-xl-5" style="color: gray;">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk1.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class style="color: gray;"="h6 text-decoration-none text-truncate" href="detail.php">Nike AIr Zoom</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>RP 1.750.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk3.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Adidas Ultraboost</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp 780.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk2.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Nike Alphafly</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp 900.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk5.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Converse Chuck</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp 795.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk4.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Nike Zoom GT</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp 990.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk6.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Reebok Ztaur</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp 750.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk7.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Puma Court Rider</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp. 1.250.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/Produk8.jfif" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.php"><i class="fa fa-shopping-cart"></i></a>

                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php">Asics Gel-Kinsei</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp. 1.150.000</h5>
                            <h6 class="text-muted ml-2"></h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
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
</body>

</html>