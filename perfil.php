<html>

<head>
    <title>
        DineEase
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
            background-color: #f8d7d7;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #e07a5f;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #d45d5d;
        }

        .navbar-nav .nav-item:last-child .nav-link {
            font-size: 1.5rem;
        }

        .content {
            text-align: center;
            margin-top: 100px;
        }

        .content a {
            color: #e07a5f;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .content a:hover {
            color: #d45d5d;
        }

        .btn-custom {
            background-color: #e07a5f;
            color: white;
            border: none;
            margin: 10px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #d45d5d;
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
                        <a class="nav-link" href="reservsAnteriores.php">Reservas</a>
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
    <div class="content">
        <div class="mt-4">
            <button class="btn btn-custom" onclick="ow.location.href='reservsAnteriores.php'">Historial de
                reservas</button>
            <button class="btn btn-custom" onclick="window.location.href='verPerfil.php'">Mi perfil</button>
            <button class="btn btn-custom" onclick="window.location.href='reservaEnCurso.php'">Reserva en curso</button>
        </div>
    </div>
</body>

</html>