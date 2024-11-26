<html>

<head>
    <title>
        Dine Ease
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('/DineEase/img/fotos_campusprado06-1024x614.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            font-family: Arial, sans-serif;
            position: relative; /* Necesario para que ::before funcione */
            margin: 0;
            height: 100vh; /* Asegura que la capa cubra toda la ventana */
            overflow: hidden; /* Evita barras de desplazamiento si no se necesitan */
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Color de superposición con transparencia (negro al 50%) */
            z-index: -1; /* Envía la capa detrás del contenido principal */
        }

        .navbar {
            background-color: #f8e8e8;
        }

        .navbar-brand img {
            height: 100px;
        }

        .navbar-nav .nav-link {
            color: #d2691e;
        }

        .card {
            margin: 20px;
            border: none;
        }

        .card img {
            border-radius: 10px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-footer {
            background-color: #fff;
            border-top: none;
        }

        .price {
            font-size: 1.2rem;
            color: #d2691e;
        }

        .rating i {
            color: #ffcc00;
        }

        .btn-menu {
            background-color: #ff7f50;
            color: #fff;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
        }
    </style>
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
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img alt="Pechuga de pollo carbonara" class="card-img-top" height="200"
                        src="/DineEase/img/pollo_carbonara.png" width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Pechuga de pollo carbonara
                        </h5>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                18.000
                            </span>
                            <div class="rating">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="Deditos cañón teriyaki" class="card-img-top" height="200"
                        src="/DineEase/img/cañon_teriyaki.png" width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Deditos cañón teriyaki
                        </h5>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                17.000
                            </span>
                            <div class="rating">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="Res al carbón" class="card-img-top" height="200" src="/DineEase/img/plancha_res.png"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Res al carbón
                        </h5>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                20.000
                            </span>
                            <div class="rating">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img alt="Arroz con pollo" class="card-img-top" height="200" src="/DineEase/img/arroz_pollo.png"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Arroz con pollo
                        </h5>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                16.000
                            </span>
                            <div class="rating">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="menu.php">
                <button class="btn-menu">
                    VER MENÚ
                </button>
            </a>
        </div>
    </div>
</body>

</html>