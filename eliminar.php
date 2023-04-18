<?php
    require("Conexion/conexion.php");

    $matricuaA = $_GET['numControl']; 
    //echo "<h2>$claveProd</h2>";
    $delete="DELETE FROM alumno WHERE NUMERO_CONTROL_ALUMNO = '$matricuaA'";
    $query = mysqli_query($conec, $delete);
    if(!$query){
        echo"ERROR AL ELIMINAR";
      }else{
        header("Location: index.php");
        //echo"PRODUCTO CON CLAVE $claveProd ELIMINADO "; 
      }
?>
