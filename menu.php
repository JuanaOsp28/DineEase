<html>

<head>
    <title>DineEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            min-height: 100vh;
            /* Cambié height por min-height */
            overflow: auto;
            /* Asegura que el contenido sea desplazable */
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
            background-color: #fce4e4;
        }

        .navbar-brand img {
            height: 100px;
        }

        .navbar-nav .nav-link {
            color: #000;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ff7f50;
        }

        .back-button {
            color: #ff7f50;
            font-size: 1.5rem;
            margin: 20px;
        }

        .card {
            margin: 10px;
            border: none;
        }

        .card img {
            border-radius: 10px;
        }

        .card-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
            color: #ff7f50;
        }

        .btn-custom {
            background-color: #ff7f50;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            margin: 10px;
        }

        .btn-custom:hover {
            background-color: #ff6347;
        }

        .rating {
            color: #ff7f50;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <img alt="Dine Ease Logo" height="50" src="/DineEase/img/Dine_ease_logo-removebg-preview.png"
                    width="100" />
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
                        <a class="nav-link" href="perfil.php">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <a href="inicio.php" class="back-button"><i class="fas fa-arrow-left"></i> Volver</a>
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <img src="/DineEase/img/pollo_cilantro.png" class="card-img-top" alt="Pechuga de pollo con arroz">
                    <div class="card-body">
                        <h5 class="card-title">Pechuga de pollo con cilantro</h5>
                        <p class="card-text">12.000</p>
                        <a href="reserva.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="img/arroz_pollo.png" class="card-img-top" alt="Dedos de pollo con tortillas">
                    <div class="card-body">
                        <h5 class="card-title">Arroz con pollo</h5>
                        <p class="card-text">7.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/plancha_res.png" class="card-img-top" alt="Res al carbón">
                    <div class="card-body">
                        <h5 class="card-title">Res al carbón</h5>
                        <p class="card-text">20.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="img/bandeja_paisa.png" class="card-img-top" alt="Arroz con pollo">
                    <div class="card-body">
                        <h5 class="card-title">Bandeja paisa</h5>
                        <p class="card-text">15.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/bowl_mexicano.png" class="card-img-top" alt="Cerdo a la enchilada">
                    <div class="card-body">
                        <h5 class="card-title">Bowl mexicano</h5>
                        <p class="card-text">18.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/cañon_champiñones.png" class="card-img-top" alt="Albóndigas">
                    <div class="card-body">
                        <h5 class="card-title">Cañon en champiñones</h5>
                        <p class="card-text">12.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/cañon_oriental.png" class="card-img-top" alt="Bowl">
                    <div class="card-body">
                        <h5 class="card-title">Cañon en salsa oriental</h5>
                        <p class="card-text">15.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/cañon_teriyaki.png" class="card-img-top" alt="Pechuga de pollo 3 piezas">
                    <div class="card-body">
                        <h5 class="card-title">Cañon Teriyaki</h5>
                        <p class="card-text">15.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/julianas_pollo_vegetales.png" class="card-img-top"
                        alt="Bistec de pollo mexicano">
                    <div class="card-body">
                        <h5 class="card-title">Julianas de pollo con vegetales</h5>
                        <p class="card-text">18.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/lasaña_mixta.png" class="card-img-top" alt="Milaneza de cerdo">
                    <div class="card-body">
                        <h5 class="card-title">Lasaña mixta</h5>
                        <p class="card-text">15.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/lasaña_boloñesa.png" class="card-img-top" alt="Pierna de chicharrón">
                    <div class="card-body">
                        <h5 class="card-title">Lasaña boloñoesa</h5>
                        <p class="card-text">20.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/milanesa_pollo.png"" class=" card-img-top" alt="Tacos">
                    <div class="card-body">
                        <h5 class="card-title">Milanesa de pollo</h5>
                        <p class="card-text">12.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/nuggets_pollo.png"" class=" card-img-top" alt="Pollo con champiñones">
                    <div class="card-body">
                        <h5 class="card-title">Nuggets de pollo</h5>
                        <p class="card-text">15.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/placha_chicharron.png"" class=" card-img-top"
                        alt="Lasagna de bolitas y pollo">
                    <div class="card-body">
                        <h5 class="card-title">Plancha de chicharrón</h5>
                        <p class="card-text">12.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/pollo_carbonara.png"" class=" card-img-top"
                        alt="Lasagna de bolitas y pollo">
                    <div class="card-body">
                        <h5 class="card-title">Pollo carbonara</h5>
                        <p class="card-text">12.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
                    <img src="/DineEase/img/pollo_tres_quesos.png"" class=" card-img-top"
                        alt="Lasagna de bolitas y pollo">
                    <div class="card-body">
                        <h5 class="card-title">Pollo tres quesos</h5>
                        <p class="card-text">12.000</p>
                        <a href="confirmacion.php" class="btn btn-custom mt-1z">
                            <i class="fa-solid fa-cart-shopping"></i> 
                        </a>
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
        <div class="d-flex justify-content-center">
            <button class="btn btn-custom">Eliminar plato</button>
            <button class="btn btn-custom">Editar plato</button>
            <button class="btn btn-custom">Agregar plato</button>
        </div>
    </div>
</body>

</html>