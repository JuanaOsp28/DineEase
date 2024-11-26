<html>
 <head>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
            height: 100px;
        }
        .navbar-nav .nav-link {
            color: #d9534f;
            font-weight: bold;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .btn-back {
            color: #d9534f;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-cancel {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .header {
            color: #d9534f;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
  </style>
 </head>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light">
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
   <a class="btn-back" href="#">
    <i class="fas fa-arrow-left">
    </i>
    Volver
   </a>
   <h2 class="header">
    MIS RESERVAS
   </h2>
   <div class="row">
    <div class="col-md-6">
     <h5>
      Reservas en curso
     </h5>
     <textarea class="form-control" readonly="" rows="10"></textarea>
    </div>
    <div class="col-md-6">
     <div class="mb-3">
      <label class="form-label" for="total">
       Total a pagar
      </label>
      <input class="form-control" id="total" readonly="" type="text"/>
     </div>
     <div class="mb-3">
      <label class="form-label" for="status">
       Estado
      </label>
      <input class="form-control" id="status" readonly="" type="text"/>
     </div>
     <div class="mb-3">
      <label class="form-label" for="payment">
       Medio de pago
      </label>
      <input class="form-control" id="payment" readonly="" type="text"/>
     </div>
     <button class="btn-cancel">
      Cancelar reserva
     </button>
    </div>
   </div>
  </div>
 </body>
</html>
