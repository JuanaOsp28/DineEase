<html>
 <head>
  <title>
   Nuevo Plato
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            background-image: url('https://placehold.co/800x600');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #f8d7da;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar-nav .nav-link {
            color: #e57373;
        }
        .navbar-nav .nav-link:hover {
            color: #d32f2f;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            margin-top: 100px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .btn-cancel {
            background-color: #ff8a65;
            border: none;
        }
        .btn-add {
            background-color: #ff7043;
            border: none;
        }
        .btn-cancel:hover, .btn-add:hover {
            opacity: 0.8;
        }
        .back-link {
            color: #ff8a65;
            text-decoration: none;
        }
        .back-link:hover {
            color: #ff7043;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <img alt="DineEase Logo" height="50" src="https://storage.googleapis.com/a1aa/image/dxSsLjpM0OLiLBiIp2ALWNaYFxQ7OPdnsZTzEeeihgEnmYyTA.jpg" width="50"/>
     DINE EASE
    </a>
    <div class="collapse navbar-collapse">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="#">
        Anuncios
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Reservas
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <i class="fas fa-user">
        </i>
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
  <div class="container text-center text-white">
   <a class="back-link" href="#">
    <i class="fas fa-arrow-left">
    </i>
    Volver
   </a>
   <h2>
    Nuevo Plato
   </h2>
   <form>
    <div class="row">
     <div class="col">
      <input class="form-control" placeholder="Nombre plato" type="text"/>
     </div>
     <div class="col">
      <input class="form-control" placeholder="Descripción" type="text"/>
     </div>
     <div class="col">
      <input class="form-control" placeholder="Precio" type="text"/>
     </div>
     <div class="col">
      <input class="form-control" placeholder="Imagen" type="text"/>
     </div>
    </div>
    <div class="mt-3">
     <button class="btn btn-cancel" type="button">
      Cancelar
     </button>
     <button class="btn btn-add" type="button">
      Agregar
     </button>
    </div>
   </form>
  </div>
 </body>
</html>
