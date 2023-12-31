<?php
	include 'global/config.php';
	include 'global/conexion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>MYT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">MYT</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input id="myInput" class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Cerrar sesión </a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="index.php">
              <span data-feather="home"></span>
            Tablero <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="dashproductos.php">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Informes
            </a>
          </li>
      
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Informes Guardados</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Mes actual
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Ultimo cuatrimestre 
            </a>
          </li>
          
        </ul>
      </div>
    </nav>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">MYT </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <h2>Actualizar Informacion</h2>
      <div class="col-md-8 order-md-1">
      <form class="needs-validation" action="actualizar.php" method="GET" novalidate>
      <?php  
     $ID=$_GET["ID"];
        ?>
      <h4 class="mb-3">Informacion del producto</h4>
      <?php
                   
                   $sentencia = $pdo->prepare("SELECT * FROM tblproductos WHERE ID = :ID");
                   $sentencia->bindParam(":ID",$ID);
                   $sentencia->execute();
                   $persona = $sentencia->fetchAll(); 
      
            
            foreach( $persona as $res){  ?>
        <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="ID" placeholder="ID" value="<?php echo $res['ID']?>" required>
            <div class="invalid-feedback">
            Se requiere informacion.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="Nombre" placeholder="Nombre" value="<?php echo $res['Nombre']?>" required>
            <div class="invalid-feedback">
            Se requiere informacion.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="Precio" placeholder="Precio" value="<?php echo $res['Precio']?>" required>
            <div class="invalid-feedback">
            Se requiere informacion.
            </div>
          </div>
          
        </div>
     
        <div class="mb-3">
          <input type="text" class="form-control" id="" name="Descripcion" placeholder="Descripcion" value="<?php echo $res['Descripcion']?>" required>
          <div class="invalid-feedback">Se requiere informacion </div>
        </div>
      
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Categoria</label>
            <select class="custom-select d-block w-100" id="" name="pais" value="" >
              <option >Elige...</option>
              <option value="1">Unifirmes</option>
              <option value="2">Respiradores</option>
              <option value="3">Quimicos</option>
              <option value="4">Aparatologis</option>
            </select>
            <div class="invalid-feedback">Se requiere informacion </div>
          </div>
          <div class="mb-3">
          <label for="">Ruta</label>
          <input type="text" class="form-control" id="" name="Imagen" placeholder="upload/ejemplo.JPGE" value="<?php echo $res['Imagen']?>" required>
          <div class="invalid-feedback">Se requiere informacion </div>
        </div>
        </div>
        <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLangHTML">
  <label class="custom-file-label" for="customFileLangHTML" data-browse="Buscar">Elige la imagen</label>
</div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">
            Guardar
        </button>
        <?php  } ?>
     
      </form>
    </div>
  





    </main>
  </div>
</div>

<script src="form-validation.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>


  </body>
</html>
