<html>
 <head>
  <title>
   Eliminar Plato
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            background-color: #f8d7d9;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #f8d7d9;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar-nav .nav-link {
            color: #e67e22;
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover {
            color: #d35400;
        }
        .content {
            background: url('https://placehold.co/800x400') no-repeat center center;
            background-size: cover;
            height: calc(100vh - 56px);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .content-inner {
            position: relative;
            z-index: 1;
        }
        .btn-custom {
            background-color: #e67e22;
            border: none;
            color: white;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #d35400;
        }
        .back-link {
            color: red;
            font-weight: bold;
            text-decoration: none;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .back-link:hover {
            color: darkred;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-light">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <img alt="DineEase Logo" height="50" src="https://storage.googleapis.com/a1aa/image/TyXDsX24fjSBXqeQ0HFKYbtZbs9rTZLTfYGnlIRzHZ3dOxknA.jpg" width="50"/>
     DINE EASE
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
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
  <div class="content">
   <div class="overlay">
   </div>
   <div class="content-inner">
    <a class="back-link" href="#">
     <i class="fas fa-arrow-left">
     </i>
     Volver
    </a>
    <h1>
     Eliminar Plato
    </h1>
    <form>
     <div class="mb-3">
      <input class="form-control" placeholder="Nombre plato" type="text"/>
     </div>
     <button class="btn btn-custom" type="button">
      Cancelar
     </button>
     <button class="btn btn-custom" type="submit">
      Eliminar
     </button>
    </form>
   </div>
  </div>
 </body>
</html>
