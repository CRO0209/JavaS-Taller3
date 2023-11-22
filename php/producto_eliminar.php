<?php

	/*== Almacenando datos ==*/
    $id_del=$_GET['id_del'];

    /*== Verificando usuario ==*/
    $check_usuario=conexion();
    $check_usuario=$check_usuario->query("SELECT id FROM car WHERE id='$id_del'");
    
    if($check_usuario->rowCount()==1){

    	$check_productos=conexion();
    	$check_productos=$check_productos->query("SELECT id FROM car WHERE id='$id_del' LIMIT 1");

    	if(!$check_productos->rowCount()<=0){
    		
	    	$eliminar_usuario=conexion();
	    	$eliminar_usuario=$eliminar_usuario->prepare("DELETE FROM car WHERE id=:id");

	    	$eliminar_usuario->execute([":id"=>$id_del]);

	    	if($eliminar_usuario->rowCount()==1){
				echo '<script language="javascript">alert("¡PRODUCTO ELIMINADO!"); location.replace("index.php");</script>';
		    }
    	}
    	$check_productos=null;
    }
    $check_usuario=null;