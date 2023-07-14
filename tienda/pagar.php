<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'carrito.php';
	include 'templates/cabecera.php';
	
?>



<?php

if($_POST){

    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Direccion=$_POST['direccion'];
    $Colonia=$_POST['colonia'];
    $Ciudad=$_POST['ciudad'];
    $Cp=$_POST['cp'];
    $Pais=$_POST['pais'];
    $Estado=$_POST['estado'];
    $Telefono=$_POST['telefono'];
    foreach( $_SESSION['CARRITO'] as $indice=>$producto){
 $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }

    $sentencia=$pdo->prepare("INSERT INTO `tbventas` 
    (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`,`Nombre`,`Apellido`,`Direccion`,`Colonia`,`Ciudad`,`Cp`,`Pais`,`Estado`,`Telefono`,`Total`, `status`) 
    VALUES 
    (NULL,:ClaveTransaccion, '' , NOW(), 
    :Correo,:Nombre,:Apellido,:Direccion,:Colonia,:Ciudad,:Cp,:Pais,:Estado,:Telefono,:Total,'pendiente');");

$sentencia->bindParam(":ClaveTransaccion",$SID);
$sentencia->bindParam(":Correo",$Correo);
$sentencia->bindParam(":Nombre",$Nombre);
$sentencia->bindParam(":Apellido",$Apellido);
$sentencia->bindParam(":Direccion",$Direccion);
$sentencia->bindParam(":Colonia",$Colonia);
$sentencia->bindParam(":Ciudad",$Ciudad);
$sentencia->bindParam(":Cp",$Cp);
$sentencia->bindParam(":Pais",$Pais);
$sentencia->bindParam(":Estado",$Estado);
$sentencia->bindParam(":Telefono",$Telefono);
$sentencia->bindParam(":Total",$total);

$sentencia->execute();
$idVenta=$pdo->lastInsertId();

foreach( $_SESSION['CARRITO'] as $indice=>$producto){
$sentencia=$pdo->prepare("INSERT INTO 
`tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`,`DESCARGADO`)
 VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");


$sentencia->bindParam(":IDVENTA",$idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentencia->execute();

}
  // echo "<h3>".$total."</h3>";


}

?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<style>

@media screen and( max-width:400px){
    #paypal-button-container{
        width: 100%;
    }
}

@media screen and(min-width:400px){
    #paypal-button-container{
        width: 250px;
        display: inline-block;
    }
}
</style>
<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con PayPal la cantidad de:</p>
    <h4>$<?PHP echo number_format($total,2); ?> </h4>
    <div id="paypal-button-container"></div>
    <p>Los productos seran descargados una vez se procese el pago<br></p>
    <strong>(para aclaraciones :braianj174@gmail.com)</strong>
</div>




<script>
        paypal.Button.render({
            env:'sandbox',

            style:{

                label:'checkout',
                size:'responsive',
                shape:'pill',
                color:'gold'
            },


            client: {
                sandbox:'AYnfNUNXFfqeWqlt3j3n0OAQs3w3xiwbHF9QWX7gopLG0xURSskjoVMu-fu-7TAI5CtN7djVSY1_ONsZ',
                production:'AWfB5CQzwjNuzzQBgV9kCd9HaSfx6C0vkBRUMxcQFsn-t0QDRKrt4e-ZSpHD_I-4t36BteCEoyefTCpo'
            },
       
       payment: function(data,actions){
            return actions.payment.create({
                payment:{
                    transactions:[
                        {
                            amount:{ total: '<?php echo $total;  ?>', currency:'MXN' },
                            description:"Compra de productos a ARK:$<?php echo number_format($total,2);?>  ",
                            custom:"<?php echo $SID; ?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
                        }
                    ]
                }
            });

       },

   onAuthorize: function(data, actions){
       return actions.payment.execute().then(function(){
        console.log(data);
        window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
       });
   }
   }, '#paypal-button-container');

    </script>

<?php include 'templates/pie.php'; ?>