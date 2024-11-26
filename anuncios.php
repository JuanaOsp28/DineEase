<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DineEase Promotions</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Puv3HdAjeRZEAS3Tzdr1H8kGtrX15UFMptFqq3hH9tBf6kzme1Mquj1N4GzksAJG" crossorigin="anonymous">


    <style>
        body {
            background-image: url('/DineEase/img/fotos_campusprado06-1024x614.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            font-family: Arial, sans-serif;
            position: relative;
            margin: 0;
            height: 100vh;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .navbar {
            background-color: #f8e8e6;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #d97b6c;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #d97b6c;
        }

        .carousel-item img {
            height: 200px;
            object-fit: cover;
        }

        .card {
            margin: 10px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .btn-custom {
            background-color: #d97b6c;
            color: white;
        }

        .btn-custom:hover {
            background-color: #c96a5b;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <img alt="Dine Ease Logo" src="/DineEase/img/Dine_ease_logo-removebg-preview.png" />
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="anuncios.php">Anuncios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservaEnCurso.php">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <a class="text-danger" href="#">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
        <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleControls">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <h2 class="text-center my-4" style="color:orange">2 × 1</h2>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-2">
                            <div class="card">
                                <img src="/DineEase/img/bowl_mexicano.png" class="card-img-top" alt="Bowl mexicano">
                                <div class="card-body">
                                    <h5 class="card-title">Bowl mexicano</h5>
                                    <p class="card-text">18.000</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="/DineEase/img/cañon_oriental.png" class="card-img-top"
                                    alt="Cañón en salsa oriental">
                                <div class="card-body">
                                    <h5 class="card-title">Cañón en salsa oriental</h5>
                                    <p class="card-text">15.000</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                <h2 class="text-center my-4" style="color:orange">10% descuento</h2>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-2">
                            <div class="card">
                                <img src="/DineEase/img/cañon_champiñones.png" class="card-img-top" alt="Albóndigas">
                                <div class="card-body">
                                    <h5 class="card-title">Cañon en champiñones</h5>
                                    <p class="card-text">12.000</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="/DineEase/img/cañon_teriyaki.png" class="card-img-top"
                                    alt="Pechuga de pollo 3 piezas">
                                <div class="card-body">
                                    <h5 class="card-title">Cañon Teriyaki</h5>
                                    <p class="card-text">15.000</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-custom mx-2"><i class="fas fa-minus"></i> Eliminar promoción</button>
            <button class="btn btn-custom mx-2"><i class="fas fa-edit"></i> Editar promoción</button>
            <button class="btn btn-custom mx-2"><i class="fas fa-plus"></i> Agregar promoción</button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>