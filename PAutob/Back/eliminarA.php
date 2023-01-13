<?php
	require('urlConexion.php');
    $con = new mysqli($serverName,$userName,$password,$dbName);
    if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
    }
		$auto = $_POST['id_auto'];
        $sql = "DELETE FROM tbl_auto where id_auto = $auto";
        if($con -> query($sql)===true){
            echo "<script>alert('El Registro a sido Eliminado');window.location.href='eliminarAuto.php';</script>";
        }else{
            echo "<p>No se elimino...</p>".$con->error;
        }
		$con -> close();
?>