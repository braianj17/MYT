<?php


 function borrarUsuario($id){

	include 'global/config.php';
	include 'global/conexion.php';
    

    $sql = "delete from tblproductos where ID = :uid ";
    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(':uid',$id);
    $stmt->execute();
    }

    function agregarUsuario($nombre,$precio,$descripcion,$imagen,$categoria){

        include 'global/config.php';
        include 'global/conexion.php';
        
    
        $sentencia = $pdo->prepare('INSERT INTO tblproductos (ID, Nombre, Precio, Descripcion ,Imagen,Categoria) VALUES(:ID, :Nombre, :Precio, :Descripcion, :Imagen, :Categoria)');
        $sentencia->execute(array(':ID'=> NULL,':Nombre'=> $nombre,':Precio'=> $precio, ':Descripcion'=> $descripcion, ':Imagen'=> $imagen, ':Categoria'=> $categoria));
   
    }


    function actualizarUsuario($id,$nombre,$precio,$descripcion,$imagen){

        include 'global/config.php';
        include 'global/conexion.php';
        
    
        $sentencia = $pdo->prepare('UPDATE tblproductos 
                                    SET nombre=:uNombre,
                                        precio=:uPrecio,
                                        descripcion=:uDescripcion,
                                        imagen=:uImagen 
                                        WHERE id=:uID');
                  $sentencia->bindParam(':uNombre',$nombre); 
                  $sentencia->bindParam(':uPrecio',$precio); 
                  $sentencia->bindParam(':uDescripcion',$descripcion); 
                  $sentencia->bindParam(':uImagen',$imagen); 
                  $sentencia->bindParam(':uID',$id); 
                  $sentencia->execute();
        
    }
    


    ?>