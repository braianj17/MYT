<?php require_once("funciones.php");

if(!empty($_GET)){
//$id = $_GET['ID'];
$nombre = $_GET['Nombre'];
$precio = $_GET['Precio'];
$descripcion = $_GET['Descripcion'];
$imagen = $_GET['Imagen'];
$categoria = $_GET['categoria'];


agregarUsuario($nombre,$precio,$descripcion,$imagen,$categoria);

echo '<script language="javascript">alert("Registro exitoso");</script>';
header('refresh:1; url=dashproductos.php');
}else{
    echo  '<script language="javascript">alert("Error");</script>'; 
}
?>

