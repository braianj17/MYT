<?php require_once("funciones.php");

if(!empty($_GET)){
$id = $_GET['ID'];
borrarUsuario($id);

echo '<script language="javascript">alert("Registro Eliminado");</script>';
header('refresh:1; url=dashproductos.php');
}else{
    echo  '<script language="javascript">alert("Error");</script>'; 
}
?>

