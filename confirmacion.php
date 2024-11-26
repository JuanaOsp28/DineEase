<html>

<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #fce4e0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #fce4e0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 50px;
        }

        .header a {
            color: #f77e53;
            font-weight: bold;
            text-decoration: none;
            margin: 0 10px;
        }

        .header .user-icon {
            font-size: 24px;
            color: #f77e53;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
        }

        .description,
        .confirmation {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
        }

        .description {
            width: 30%;
        }

        .description img {
            width: 100%;
            border-radius: 10px;
        }

        .confirmation {
            width: 60%;
        }

        .confirmation h3 {
            color: #f77e53;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-continue {
            background-color: #f77e53;
            color: white;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
        }

        .btn-continue:hover {
            background-color: #f55a2c;
        }
    </style>
</head>

<body>
    <div class="container">
        <a class="navbar-brand" href="inicio.php">
            <img alt="Dine Ease Logo" height="50" src="/DineEase/img/Dine_ease_logo-removebg-preview.png" width="100" />
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
    <div class="content">
        <div class="description">
            <img alt="Image of a meal" height="200"
                src=""
                width="300" />
            <h4>
                DESCRIPCION
            </h4>
        </div>
        <div class="confirmation">
            <h3>
                Confirmación
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" placeholder="Nombres" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Apellidos" type="text" />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Cédula" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Celular" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Carnet" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Correo" type="text"/>
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Cantidad" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Valor a pagar" type="text"  />
                </div>
                <div class="col-md-6">
                    <input class="form-control" placeholder="Medio de pago" type="text"  />
                </div>
            </div>
            <button class="btn-continue">
                Continuar ➔
            </button>
        </div>
    </div>
</body>

</html>