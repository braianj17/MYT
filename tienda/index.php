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
 <script>(()=>{const d=document.documentElement;d.classList.remove("Noscript"),d.classList.add("Script")})();</script><link rel="stylesheet" href="style_c.css">

<!-- partial:index.partial.html -->
<main class="Main">
  <h1>!Descuentos!</h1>
  <section class="Carousel" id="carousel" tabindex="-1">
    <h2 class="Hidden">Carousel</h2>
    <article class="Card Card--overlay Card--square" id="card-1">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="ropa/over.jpg">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--wide" id="card-2">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="pix/hifuv.jpg">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--portrait" id="card-3">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="360" height="480" loading="lazy" src="https://images.unsplash.com/photo-1621131179929-426cfb7ce409?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxMTAzNw&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--photo" id="card-4">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="708" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622176835604-e644073b0eab?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxMTA3OQ&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--square" id="card-5">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622987437805-5c6f7c2609d7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTA3NA&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--wide" id="card-6">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="https://images.unsplash.com/photo-1607935911096-f31f85819be7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMyNTI1NA&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--portrait" id="card-7">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="360" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622595522218-f318265a40f4?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTE1Ng&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--photo" id="card-8">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="708" height="480" loading="lazy" src="https://images.unsplash.com/photo-1621045246196-4c7ce9092d3a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTIyOQ&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
  </section>
  <!--/Carousel-->
  
  <nav class="Pagination">
    <h2 class="Hidden">Carousel Navigation</h2>
    <button class="Arrow" type="button" aria-controls="carousel" disabled>
      <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg>
      <span class="Hidden">Previous slide</span>
    </button>
    <button class="Arrow" type="button" aria-controls="carousel" disabled>
      <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
      </svg>
      <span class="Hidden">Next slide</span>
    </button>
    <div class="Dots">
      <a href="#card-1" class="Dot" tabindex="-1"><span class="Hidden">Slide 1</span></a>
      <a href="#card-2" class="Dot" tabindex="-1"><span class="Hidden">Slide 2</span></a>
      <a href="#card-3" class="Dot" tabindex="-1"><span class="Hidden">Slide 3</span></a>
      <a href="#card-4" class="Dot" tabindex="-1"><span class="Hidden">Slide 4</span></a>
      <a href="#card-5" class="Dot" tabindex="-1"><span class="Hidden">Slide 5</span></a>
      <a href="#card-6" class="Dot" tabindex="-1"><span class="Hidden">Slide 6</span></a>
      <a href="#card-7" class="Dot" tabindex="-1"><span class="Hidden">Slide 7</span></a>
      <a href="#card-8" class="Dot" tabindex="-1"><span class="Hidden">Slide 8</span></a>
    </div>
  </nav>
</main>
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
	
		
$sentencia=$pdo->prepare("SELECT * FROM `tblproductos` ");
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



<!--<script>
$(function () {
$('[data-toggle="popover"]').popover()
})
</script>-->


  </body>

<?php
include 'templates/pie.php';

include 'script.php'
?>
 <script type="" src="script.js"></script>
</html>
