<html>

<head>
    <title>
        Iniciar sesión
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left-side {
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .left-side::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .logo {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .logo img {
            max-width: 100vb;
        }

        .logo h1 {
            font-size: 48px;
            color: #F36F45;
            margin: 0;
        }

        .right-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
        }

        .login-form h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .login-form p {
            color: #666;
            margin-bottom: 30px;
        }

        .login-form .form-control {
            margin-bottom: 20px;
            height: 45px;
            font-size: 16px;
        }

        .login-form .btn {
            background-color: #F36F45;
            color: #fff;
            font-size: 18px;
            height: 45px;
            border: none;
        }

        .login-form .btn:hover {
            background-color: #e65c32;
        }

        .login-form a {
            color: #F36F45;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="left-side">
            <div class="logo">
                <img alt="Logo of a restaurant with a table and a dish" height="700"
                    src="\DineEase\img\fotos_campusprado06-1024x614.jpg"
                    width="1200" />
                
            </div>
        </div>
        <div class="right-side">
            <form class="login-form">
                <h2>
                    Iniciar sesión
                </h2>
                <p>
                    Bienvenido de nuevo! Por favor ingresa tu cuenta registrada.
                </p>
                <input class="form-control" placeholder="Usuario" type="text"  />
                <input class="form-control" placeholder="Contraseña" type="password" />
                <a href="crearCuenta.php" style="margin-top: 20px;">
                    Crear mi cuenta
                </a>
                <button type="button" class="btn btn-block mt-3" onclick="window.location.href='inicio.php'">INGRESAR</button>

            </form>
        </div>
    </div>
</body>

</html>