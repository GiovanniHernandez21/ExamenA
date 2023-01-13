<?php
	require('urlConexion.php');
    $con = new mysqli($serverName,$userName,$password,$dbName);
    if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
    }
		$cliente = $_POST['id_cli'];
        $sql = "DELETE FROM tbl_clientes where id_cli = $cliente";
        if($con -> query($sql)===true){
            echo "<script>alert('El Registro a sido Modificado');window.location.href='eliminarCliente.php';</script>";
        }else{
            echo "<p>No se elimino...</p>".$con->error;
        }
		$con -> close();
?>