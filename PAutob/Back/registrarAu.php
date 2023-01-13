<?php
    if($_POST){
        require('urlConexion.php');
        $con = new mysqli($serverName,$userName,$password,$dbName);
        if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
        }
     if(isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['veraut']) && isset($_POST['annio']) && isset($_POST['km']) && isset($_POST['no_serie']) ){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $veraut = $_POST['veraut'];
        $annio = $_POST['annio'];
        $km = $_POST['km'];
        $no_serie = $_POST['no_serie'];
        require('urlConexion.php');
        $con = new mysqli($serverName,$userName,$password,$dbName);
        if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
        }
        $sql = "INSERT INTO tbl_auto
        (marca,modelo,version_aut,annio,km,no_serie) VALUES ('$marca','$modelo','$veraut','$annio','$km','$no_serie')";
        if($con -> query($sql)===true){
        echo "<script>alert('El Registro a sido agregado');window.location.href='registrarAuto.php';</script>";
        }else{
        echo "<p>No se agregó...</p>".$con->error;
        }
        }
        
        }
        ?>