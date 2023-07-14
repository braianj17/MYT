<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'carrito.php';
	/**/	
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'templates/cabecera.php'; ?>

<style>
html,body{
  color:black;
  font-family:'Opens Sans',helvetica;  
  height:100%;
  width:100%;
  margin: 0px;
}
.slide{
    background: url(pix/p4-04.png);
	padding: 130px;
	background-repeat: no-repeat;
	background-size: cover;
	height: 100%;
   width: 100% ;
    

}

</style>

 <!-- / .topnav -->
<br>
 <section class="banner">
    <div class="slide">

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
   id ='26' 
OR id ='27' 
OR id ='28'
OR id ='29'
OR id ='30'
OR id ='31'
OR id ='32'
OR id ='33'
OR id ='34'
OR id ='35'
OR id ='36'
OR id ='37'
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
