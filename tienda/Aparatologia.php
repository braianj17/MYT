<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'carrito.php';
	/**/	
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'templates/cabecera.php'; ?>

 <!-- / .topnav -->

 <section class="banner">
    <div class="slide">
      <div class="description">
        <h1>Echa un vistazo a nuestros productos </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deleniti similique fugit expedita commodi, consectetur, eligendi.</p>
      </div>
      <img src="pix/port6.png" width="350" height="350">
    </div>
  </section>
  <!-- / .banner -->

  <?php if($mensaje!=""){ ?>
	<br>
	<div class="alert alert-success">
		<?php 
		 echo $mensaje; ?>
		<a href="mostrarCarrito.php" class="badge badge-success"> ver carrito</a>
	</div>
<?php } ?>

<div class="shop-items">
  <div class="container" >
	<div class="row">
		<?PHP
	
		
$sentencia=$pdo->prepare("SELECT * FROM `tblproductos` 
WHERE 
   Categoria ='3' 
");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
		?>

<?php foreach($listaProductos as $producto){?>

	<div class="col-sm col-sm-3">
	<div class="shop-item">
	<a href="#" class="shop-item--container">

<img title="<?php echo $producto['Nombre'];?>"
alt="<?php echo $producto['Nombre'];?>" 
class="card-img-top" 
src="<?php echo $producto['Imagen'];?>" 
data-toggle="popover"
data-trigger="hover";
data-content="<?php echo $producto['Descripcion'];?>"
height="317px"
>
	</a>
<div class="card-body">
	<samp><?php echo $producto['Nombre'];?> </samp>
	<h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
	<p class="card-text">Descripcion</p>

	<form action="" method="post">

<input type="hidden" name="id" id="id" value="<?php echo  openssl_encrypt( $producto['ID'],COD,KEY);?>">
<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto['Nombre'],COD,KEY);?>" >
<input type="hidden" name="precio" id="precio" value="<?php  echo openssl_encrypt( $producto['Precio'],COD,KEY);?>">
<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1 ,COD,KEY);?>">

	<button class="btn btn-primary" 
	name="btnAccion" value="Agregar" 
	type="submit">Agregar al carrito</button>

	</form>

	
</div>
</div><!--shop-items -->
</div>


<?php } ?>


</div>
  </div>
</div>



<script>
$(function () {
$('[data-toggle="popover"]').popover()
})
</script>

  </body>

<?php
include 'templates/pie.php';

include '../script.php'
?>
</html>
