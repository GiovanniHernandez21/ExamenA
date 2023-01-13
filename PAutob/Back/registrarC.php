<?php
if($_POST){

    if(isset($_POST['nombre']) && isset($_POST['ap']) && isset($_POST['am']) && isset($_POST['rfc']) && isset($_POST['curp'])){
        $nombre = $_POST['nombre'];
        $ap = $_POST['ap'];
        $am = $_POST['am'];
        $rfc = $_POST['rfc'];
        $curp = $_POST['curp'];
        require('urlConexion.php');
        $con = new mysqli($serverName,$userName,$password,$dbName);
        if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
        }
        $sql = "INSERT INTO tbl_clientes
        (nombre_cli,apellido_paterno,apellido_materno,rfc,curp) VALUES ('$nombre','$ap','$am','$rfc','$curp')";
        if($con -> query($sql)===true){
            echo "<script>alert('El Registro a sido agregado');window.location.href='registrarCliente.php';</script>";
        }else{
        echo "<p>No se agregó...</p>".$con->error;
        }
        }

}
        ?>