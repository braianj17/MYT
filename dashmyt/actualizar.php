<?php require_once("funciones.php");

if(!empty($_GET)){
$id = $_GET['ID'];
$nombre = $_GET['Nombre'];
$precio = $_GET['Precio'];
$descripcion = $_GET['Descripcion'];
$imagen = $_GET['Imagen'];

actualizarUsuario($id,$nombre,$precio,$descripcion,$imagen);

echo '<script language="javascript">alert("Registro exitoso");</script>';
header('refresh:1; url=dashproductos.php');
}else{
    echo  '<script language="javascript">alert("Error");</script>'; 
}
?>

