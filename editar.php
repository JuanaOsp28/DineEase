<html>
 <head>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            background-image: url('https://placehold.co/800x600'); /* Background image of a restaurant */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #f8d7da;
        }
        .navbar-brand {
            font-size: 24px;
            color: #d9534f;
        }
        .navbar-nav .nav-link {
            color: #d9534f;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            margin-top: 100px;
        }
        .form-control {
            background-color: #d3d3d3;
            border: none;
        }
        .btn-cancel, .btn-edit {
            background-color: #f0ad4e;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
        }
        .btn-cancel {
            background-color: #d9534f;
        }
        .back-link {
            color: #d9534f;
            text-decoration: none;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <img alt="Logo" class="d-inline-block align-top" height="50" src="https://storage.googleapis.com/a1aa/image/nqkYfoKi6fukYU3KsJ5MLd5c6pgfPTJeJXBvzO0epcRdlETeE.jpg" width="50"/>
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
  <div class="container text-center text-white">
   <a class="back-link" href="#">
    ← Volver
   </a>
   <h2>
    Editar Plato
   </h2>
   <form>
    <div class="row mb-3">
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
    <button class="btn-cancel" type="button">
     Cancelar
    </button>
    <button class="btn-edit" type="submit">
     Editar
    </button>
   </form>
  </div>
 </body>
</html>
