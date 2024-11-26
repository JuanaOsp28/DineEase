<html>

<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            height: 100%;
        }

        .left-side {
            background: url('/DineEase/img/Dine_ease_logo-removebg-preview.png') no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .left-side::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .logo h1 {
            color: #F26522;
            font-size: 3rem;
            margin: 0;
        }

        .right-side {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
        }

        .form-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .form-container .form-control {
            margin-bottom: 1rem;
        }

        .form-container .btn {
            background-color: #F26522;
            color: white;
            width: 100%;
        }

        .back-link {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #F26522;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-md-6 left-side">
            </div>
            <div class="col-md-6 right-side">
                <div class="form-container">
                    <a class="back-link" href="iniciarSesion.php">
                        <i class="fas fa-arrow-left">
                        </i>
                        Volver
                    </a>
                    <h2>
                        Registro
                    </h2>
                    <form>
                        <input class="form-control" placeholder="Nombre completo" type="text" />
                        <div class="row">
                            <div class="col">
                                <input class="form-control" placeholder="Celular" type="text" />
                            </div>
                            <div class="col">
                                <input class="form-control" placeholder="Correo" type="email" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-control" placeholder="Usuario" type="text" />
                            </div>
                            <div class="col">
                                <input class="form-control" placeholder="Contraseña" type="password" />
                            </div>
                        </div>
                        <button class="btn" type="submit">
                            Crear cuenta
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>