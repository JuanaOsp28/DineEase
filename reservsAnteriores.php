<html>

<head>
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
            color: #d9534f;
            font-weight: bold;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
        }

        .back-link {
            color: #d9534f;
            font-weight: bold;
            margin-bottom: 10px;
            display: inline-block;
        }

        .back-link i {
            margin-right: 5px;
        }

        .table th {
            background-color: #6c757d;
            color: white;
        }

        .table td,
        .table th {
            text-align: center;
        }

        .header {
            color: #d9534f;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
            <a class="navbar-brand" href="inicio.php">
            <img alt="Dine Ease Logo" height="50" src="/DineEase/img/Dine_ease_logo-removebg-preview.png" width="100"/>
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
    <div class="container content">
        <a class="back-link" href="#">
            Reservas anteriores
        </a>
        <h2 class="header">
            MIS RESERVAS
        </h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        Fecha
                    </th>
                    <th>
                        Descripción
                    </th>
                    <th>
                        Total pagado
                    </th>
                    <th>
                        Medio de pago
                    </th>
                    <th>
                        Estado
                    </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</body>

</html>