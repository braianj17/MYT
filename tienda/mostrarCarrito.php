<?php
	include 'global/config.php';
	include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'templates/cabecera.php'; ?>

<div class="container">
<br><br><br><br><br>
<h3>MYT Store</h3>
<?php  if(!empty($_SESSION['CARRITO'])){


?>
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
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>  
        <tr>
            <td while="40%" ><?php echo $producto['NOMBRE']?> </td>
            <td while="15%" class="text-center"> <?php echo $producto['CANTIDAD']?>  </td>
            <td while="20%" class="text-center">  <?php echo $producto['PRECIO']?> </td>
            <td while="50%" class="text-center">  <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?> </td>
            <td while="5%"> 
                
            <form action="" method="post">

            <input type="hidden" 
            name="id" 
            id="id"
            value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY); ?>">
                <button 
                class="btn btn-danger" 
                type="submit" 
                name="btnAccion"
                value="Eliminar"

                >Eliminar </button> 
            </form>
            </td>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);    ?>

        <?php } ?>  

    <tr>
<td colspan="3" align="right" ><h3>Total</h3> </td>
<td align="rigth"><h3><?php echo number_format($total,2);?></h3></td>
<td></td>
    </tr>
            <tr>
                <td colspan="5">
                  <!--   <form action="pagar.php" method="post">
                        <div class="">
                            <div class="form-group">
                                <label for="my-input">Correo de contacto:</label>
                                    <input id="email" name="email" class="form-control" type="email"placeholder="Por favor escribe tu correo" require>
                            </div>
 <div class="form-row">
    <div class="form-group col-md-3">
      <label for="">Nombre</label>
      <input type="" name="nombref" class="form-control" id="" placeholder="Nombre">
    </div>
  <div class="form-group col-md-3">
      <label for="">Apellido</label>
      <input type="" name="apellidof" class="form-control" id="" placeholder="Apellido">
    </div>
    <div class="form-group col-md-3">
    <label for="">Correo</label>
    <input type="text" class="form-control" id="" placeholder="@gmail.com">
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="">Direccion</label>
    <input type="text" class="form-control" id="" placeholder="Direccion">
  </div>
  <div class="form-group col-md-3">
      <label for="">Ciudad</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>
    <div class="form-group ">
      <label for="">Codigo Postal</label>
      <input type="text" class="form-control" id="">
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="">Pais</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">Estado</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>
 
 
                   

                    <small 
                    id="emailHelp" 
                    class="form-text text-muted"
                    >
                    Los productos se enviaran a este correo.
                    </small>
                        </div>

                        <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="btnAccion"
                        value="proceder"
                        >
                        Proceder a pagar >>>>>

                        </button>
                
                    </form>-->
<h3>Información de contacto</h3>
                    <form action="pagar.php" method="post">
                    <div class="form-group">
    <label for="inputAddress">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese correo electrónico 
">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  </div>
  <h5>Dirección de envío</h5>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control" placeholder="Apellido">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">whatsapp</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="+52">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
     
      <select class="custom-select my-1 mr-sm-2" name="select" id="select">
    <option selected value="opc0">Elige tu ciudad...</option>
<option value="opc1">Aguascalientes</option>
<option value="opc1">Baja California </option>
<option value="opc1">Baja California Sur </option>
<option value="opc1">Campeche </option>
<option value="opc1">Chiapas </option>
<option value="opc1">Chihuahua </option>
<option value="opc1">Coahuila </option>
<option value="opc1">Colima </option>
<option value="opc2">Distrito Federal</option>
<option value="opc1">Durango </option>
<option value="opc2">Estado de México </option>
<option value="opc1">Guanajuato </option>
<option value="opc1">Guerrero </option>
<option value="opc1">Hidalgo </option>
<option value="opc1">Jalisco </option>
<option value="opc1">Michoacán </option>
<option value="opc1">Morelos </option>
<option value="opc1">Nayarit </option>
<option value="opc1">Nuevo León </option>
<option value="opc1">Oaxaca </option>
<option value="opc2">Puebla </option>
<option value="opc1">Querétaro </option>
<option value="opc1">Quintana Roo </option>
<option value="opc1">San Luis Potosí </option>
<option value="opc1">Sinaloa </option>
<option value="opc1">Sonora </option>
<option value="opc1">Tabasco </option>
<option value="opc1">Tamaulipas </option>
<option value="opc1">Tlaxcala </option>
<option value="opc1">Veracruz </option>
<option value="opc1">Yucatán </option>
<option value="opc1">Zacatecas</option>
  </select>
    </div>
    <div class="form-group col-md-3 envio" >
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle y Numero">
    </div>
    <div class="form-group col-md-3 envio" >
    <input type="text" class="form-control" id="inputAddress" placeholder="Colonia">
    </div>
    
    <div class="form-group col-md-2 envio">
      
      <input type="text" class="form-control" id="inputZip" placeholder="Codigo Postal">
    </div>
    <div class="col-md-6">
                  <div class="form-group mb-5 mensaje">
                     <div class="card" >
  <h5 class="card-header">¡Lo sentimos cotizaremos tu envio personalmente!</h5>
  <div class="card-body">
    <h5 class="card-title">MYT</h5>
    <p class="card-text">Un asistente te atendera personalmente.</p>
    <button type="button" class="btn btn-outline-success">whatsapp</button>
  </div>
</div>
                     
                  </div>
              </div>
  </div>
  <div class="form-group envio">
   
    <small 
                    id="emailHelp" 
                    class="form-text text-muted"
                    >
                    Los productos se enviaran a esta Direccion.
                    </small>
 
  <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="btnAccion"
                        value="proceder"
                        >
                        Proceder a pagar >>>>>

                        </button>
                        </div>
</form>




                </td>
            </tr>

    </tbody>
</table>
</div>
</div>
<?php } else { ?>

<div class="alert alert-success">
 No hay productos 
</div>
<?php  } ?>


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
<?php include 'templates/pie.php'; ?>
</html>
