
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profil</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
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

                <ahref="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Shoes</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Sport</span>
                    </a>

            </div>

        </div>

    </div>
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">

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

                            <li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
                            <a class="breadcrumb-item active">Edit</a>

                            <div class="nav-item dropdown">
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-body mt-3  ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body" style="margin-bottom: 85px ;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>MhmdZaki</h4>
                                    <p >Muhammad Zaki Asy'ari</p>
                                    <br>
                                    <button class="btn btn-primary">Edit Foto</button>
                                    <button class="btn btn-outline-primary">Hapus Foto</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body" style="margin-bottom: 40px;">
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Panjang</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No Telepon</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <a type="button" class="btn btn-primary px-4" href="profil.php">Konfirmasi</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
</body>