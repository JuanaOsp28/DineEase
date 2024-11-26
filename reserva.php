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
            background-color: #FDECE4;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #E87E4D;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #D65A31;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .description,
        .reservation {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .description {
            width: 30%;
        }

        .reservation {
            width: 65%;
        }

        .description img {
            width: 100%;
            border-radius: 10px;
        }

        .description h5 {
            color: #E87E4D;
            font-weight: bold;
        }

        .btn-back {
            color: #E87E4D;
            font-weight: bold;
            margin: 20px;
        }

        .btn-back:hover {
            color: #D65A31;
        }

        .btn-orange {
            background-color: #E87E4D;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-orange:hover {
            background-color: #D65A31;
        }

        .btn-continue {
            background-color: #E87E4D;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            width: 100%;
        }

        .btn-continue:hover {
            background-color: #D65A31;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
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
    <a class="btn-back" href="#">
        <i class="fas fa-arrow-left">
        </i>
        Volver
    </a>
    <div class="container content">
        <div class="description">
            <img alt="Plato de comida con arroz, carne y vegetales" height="200"
                src="https://storage.googleapis.com/a1aa/image/EckeA0HnGkRTMSNNLT9LWtG53OKfLTUDySiMekuMM4kfuiJPB.jpg"
                width="300" />
            <h5>
                DESCRIPCION
            </h5>
            <p>
                Plato de arroz con carne y vegetales. La porción es suficiente para una persona. Incluye una bebida de
                su elección. Ideal para almuerzos o cenas. Se sirve caliente y recién preparado.
            </p>
        </div>
        <div class="reservation">
            <h5 class="text-center">
                Reservar
            </h5>
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="cantidad">
                            Cantidad
                        </label>
                        <input class="form-control" id="cantidad" type="number" />
                    </div>
                    <div class="col d-flex align-items-end">
                        <button class="btn btn-orange" type="button">
                            Obtener cantidad
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mediosPago">
                        Medios de pago
                    </label>
                    <select class="form-select" id="mediosPago">
                        <option value="efectivo">
                            Efectivo
                        </option>
                        <option value="tarjeta">
                            Tarjeta de crédito
                        </option>
                        <option value="transferencia">
                            Transferencia bancaria
                        </option>
                        <option value="paypal">
                            PayPal
                        </option>
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="nombres">
                            Nombres
                        </label>
                        <input class="form-control" id="nombres" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label" for="apellidos">
                            Apellidos
                        </label>
                        <input class="form-control" id="apellidos" type="text" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="celular">
                            Celular
                        </label>
                        <input class="form-control" id="celular" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label" for="correo">
                            Correo
                        </label>
                        <input class="form-control" id="correo" type="email" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cedula">
                        Cédula
                    </label>
                    <input class="form-control" id="cedula" type="text" />
                </div>
                <button class="btn btn-continue" type="submit">
                    Continuar
                    <i class="fas fa-arrow-right">
                    </i>
                </button>
            </form>
        </div>
    </div>
</body>

</html>