<?php
if($_POST){
    require_once 'urlConexion.php';
 
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
        echo "Connected to $dbName at $serverName successfully.";
      
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbName :" . $pe->getMessage());
    }
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
        $sql2 = "SELECT id_cli from tbl_clientes WHERE nombre_cli='$nombre' AND apellido_paterno='$ap' AND
        apellido_materno='$am' AND rfc='$rfc' AND curp='$curp'";
        $result = $con->query($sql2);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $id = $row["id_cli"];
                echo"$id";
                
        }
       
}
    }

}
        ?>