<html>

<head>
    <title>
        Editar Perfil
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .left-side {
            flex: 1;
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .left-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #f36f45;
        }

        .logo img {
            max-width: 100px;
        }

        .logo h1 {
            font-size: 48px;
            margin: 0;
        }

        .right-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-container .form-control {
            margin-bottom: 10px;
        }

        .form-container .btn {
            background-color: #f36f45;
            color: white;
            width: 100%;
        }

        .back-link {
            display: flex;
            align-items: center;
            color: #f36f45;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .back-link i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <img alt="Logo of a restaurant with the text 'DINE EASE'" height="100"
                    src="https://storage.googleapis.com/a1aa/image/fZcdOHf3MtqcAEq485VMW0ochWsMyGadxzgPAkbvIHo68YyTA.jpg"
                    width="100" />
                <h1>
                    DINE EASE
                </h1>
            </div>
        </div>
        <div class="right-side">
            <div class="form-container">
                <a class="back-link" href="#">
                    <i class="fas fa-arrow-left">
                    </i>
                    Volver
                </a>
                <h2>
                    Editar Perfil
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
                    <textarea class="form-control" placeholder="Descripción" rows="3"></textarea>
                    <button class="btn" type="submit">
                        Guardar cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>