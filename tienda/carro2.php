<?php
	include 'global/config.php';
	include 'carrito.php';
    include 'templates/cabecera.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
<body class="bg-light">
    <div class="container">
        <br><br><br><br><br>
        <h3>MYT Store (¡Envíos gratis solo Puebla y CDMX!)</h3>
            <?php  if(!empty($_SESSION['CARRITO']))
    { ?>
        <div  class="table-responsive-sm">
            <table class="table table-light table-bordered ">
                <tbody>
                    <tr>
                        <th while="40%">Descripcion</th>
                        <th while="15%" class="text-center">Cantidad</th>
                        <th while="20%" class="text-center">Precio</th>
                        <th while="50%" class="text-center">Total</th>
                        <th while="5%">---</th>
                    </tr>
                        <?php $total=0;    ?>
                        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto)
                        { ?>  
                    <tr>
                        <td while="40%" ><?php echo $producto['NOMBRE']?> </td>
                        <td while="15%" class="text-center"> <?php echo $producto['CANTIDAD']?>  </td>
                        <td while="20%" class="text-center">  <?php echo $producto['PRECIO']?> </td>
                        <td while="50%" class="text-center">  <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?> </td>
                        <td while="5%"> 
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY); ?>">
                                    <button 
                                    class="btn btn-danger" 
                                    type="submit" 
                                    name="btnAccion"
                                    value="Eliminar"
                                    >Eliminar 
                                    </button> 
                            </form>
                        </td>
                    </tr>
                        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
                    <?php } ?>  
                    <tr>
                        <td colspan="3"><h3>Total</h3> </td>
                        <td><h3><?php echo number_format($total,2);?></h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php } else 
                {?>
                    <div class="alert alert-success">
                    No hay productos 
                    </div>
        <?php  } ?>

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Aviso</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
    
      <div class="card">
        <img src="OIP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">¡Te esperamos en Whatsapp!</h5>
          <p class="card-text" >En MYT trabajamos constantemente para brindarte la mejor atención, un asesor te entenderá inmediatamente.</p>
          <p class="card-text"><small class="text-muted">Tiempo de respuesta 5 minutos aproximadamente....</small></p>
        </div>
        </div>

      <form class="card p-2">
                
          <div class="input-group-append" style="align-content: center;">
            <a href="https://api.whatsapp.com/send?phone=+522227883380&text=hola,%20cotiza%20mi%20envio?" role="button" class="btn btn-outline-success btn-lg btn-block" >Whatsapp</a>
          </div>
        
      </form>
    </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Información de contacto</h4>
      <form class="needs-validation" action="pagar.php" method="post" novalidate>
      <div class="form-group">
    <input type="email" class="form-control" id="" name="email" placeholder="Ingrese correo electrónico" required>
    <div class="invalid-feedback">Se requiere un nombre válido.</div>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  </div>
      <h4 class="mb-3">Dirección de Envio</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre" value="" required>
            <div class="invalid-feedback">
            Se requiere un nombre válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="apellido" placeholder="Apellido" value="" required>
            <div class="invalid-feedback">
            Se requiere un  apellido válido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="" name="direccion" placeholder="Calle y numero" value="" required>
          <div class="invalid-feedback">Se requiere informacion </div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="" name="colonia" placeholder="Colonia" value="" required>
          <div class="invalid-feedback">Se requiere informacion </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="ciudad" placeholder="Ciudad" value="" required>
            <div class="invalid-feedback">Se requiere informacion </div>
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="" name="cp" placeholder="Codigo Postal" value="" required>
            <div class="invalid-feedback">Se requiere informacion </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Pais/region</label>
            <select class="custom-select d-block w-100" id="" name="pais" value="" required>
              <option value="">Elige...</option>
              <option>Mexico</option>
            </select>
            <div class="invalid-feedback">Se requiere informacion </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="" name="estado" value="" required>
              <option value="">Estado...</option>
              <option>Puebla</option>
              <option>CdMx</option>
            </select>
            <div class="invalid-feedback">Se requiere informacion </div>
          </div>
        
        </div>
        <div class="mb-3">
          <label for="address">whatsapp</label>
          <input type="text" class="form-control" id="" name="telefono" placeholder="+52" value=""required >
          <div class="invalid-feedback">Se requiere informacion </div>
        </div>
       
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">
            Continuar con el envio
        </button>
      </form>
    </div>
  </div>

 
</div>
   
  </body>

<?php include 'templates/pie.php'; ?>
</div>
</html>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="form-validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

  $('#select').on('change',function(){
        var selectValor = $(this).val();
        //alert (selectValor);

 if (selectValor == 'opc0') {
            $('.envio').hide();
        }else {
          $('.mensaje').hide();
            //alert('esta es la opcion 2')
        }

        if (selectValor == 'opc2') {
            $('.envio').show();
        }else {
          $('.envio').hide();
            //alert('esta es la opcion 2')
        }
        if (selectValor == 'opc1') {
            $('.mensaje').show();
        }else {
          $('.mensaje').hide();
            //alert('esta es la opcion 2')
        }


    });
</script>

