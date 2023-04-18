<?php
    $servidor = "localhost";
    $usuario = "root";
    $Contrasena = "";
    $baseDatos = "tallerestesji";

  // @$conec = mysqli_connect($servidor,$usuario,$Contrasena,$baseDatos);

 //    if($conec){
   //      echo ("Felicidades, conexion exitante");
     //}else{
       //  echo ("Error al conectar al servidor de BD");
     //}
    @$conec = mysqli_connect($servidor,$usuario,$Contrasena,$baseDatos)
    OR DIE("ERROR AL CONECTAR AL SERVIDOR DE BD")
?>