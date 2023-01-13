<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Autobahn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">


    <?php
	require('urlConexion.php');
    $con = new mysqli($serverName,$userName,$password,$dbName);
    if($con->connect_error){
        die("conexion fallida:".$con->connect_error);
    }
		$cliente = $_POST['id_cli'];
        $sql2 = "SELECT *FROM tbl_clientes where id_cli = $cliente";
        $result = $con->query($sql2);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()) {
                $nombre = $row["nombre_cli"];
                $ap = $row["apellido_paterno"];
                $am = $row["apellido_materno"];
                $rfc = $row["rfc"];
                $curp = $row["curp"];
        }
    }
		$con -> close();
?>
</head>

<body>
    <header>
    <div class="contenedor">
            <h1 class="iconicstroke-steering-wheel">Inicio</h1>
            <input type="checkbox" id="menu-bar">
            <label class="fontawesome-align-justify" for="menu-bar"></label>
            <nav class="menu">
                <ul class="nav justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="index.html"><img src="img/casa.png" width="50" height="34" /> 
                            Inicio</a>
                                </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-dark" data-toggle="dropdown" style="color:rgb(255, 255, 255);"
                    href="#">
                    <img src="img/usuarios.png" width="50" height="36" /> Clientes</a>
                    <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="registrarCliente.php"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                    Regstrar</a>
                    <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="modificarCliente.php"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                    Modificar</a>
                    <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="eliminarCliente.php"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                    Eliminar</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-dark" data-toggle="dropdown" style="color:rgb(255, 255, 255);"
                    href="#">
                    <img src="img/auto.png" width="50" height="38" /> Autos</a>
                    <div class="dropdown-menu bg-dark">
                        <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="#"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                            Regstrar</a>
                            <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="#"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                            Modificar</a>
                            <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="#"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                            Eliminar</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-dark" data-toggle="dropdown" style="color:rgb(255, 255, 255);"
                    href="#">
                    <img src="img/vauto.png" width="50" height="34" /> Ventas</a>
                    <div class="dropdown-menu bg-dark">
                        <a class="dropdown-item bg-dark" style="color:rgb(255, 255, 255);" href="registrarVenta.php"><img src="jeansimgH/vela.png" width="24" height="24" /> 
                            Realizar Venta</a>
                    </div>
                    </li>
            </nav>
        </div>
    </header>
    <main>
        <section id="banner">
            <img src="img/autob.jpg"/>
            <div class="contenedor">
                <h2>Bienvenido</h2>
            </div>
        </section>
    </main>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
                <form class="formulario" action="modificarC.php" method="post">

                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input required type="text" class="form-control" id="nombre" name="nombre" value="<?php  echo $nombre;?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ap">Apellido Paterno</label>
                        <input required type="text" class="form-control" id="ap" name="ap" value="<?php  echo $ap;?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="am">Apellido materno</label>
                        <input required type="text" class="form-control" id="am" name="am" value="<?php  echo $am;?>">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="rfc">RFC</label>
                        <input required type="text" class="form-control" id="rfc" name="rfc" value="<?php  echo $rfc;?>">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="curp">Curp</label>
                        <input required type="text" class="form-control" id="curp" name="curp" value="<?php  echo $curp;?>">
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>

            </div>
        </div>
    </div>
    <footer>
        <div class="contenedor">
            <p class="copy">GioFan &copy; 2023</p>
            <div class="sociales">
                <a class="fontawesome-facebook-sign" href="#"></a>
                <a class="fontawesome-twitter" href="#"></a>
                <a class="fontawesome-camera-retro" href="#"></a>
                <a class="fontawesome-google-plus-sign" href="#"></a>
            </div>
        </div>
    </footer>
</body>

</html>