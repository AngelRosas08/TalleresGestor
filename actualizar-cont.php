<?php
  agregarAlumno();
  function agregarAlumno(){
    require("Conexion/conexion.php");
      @$matricula = $_POST["numeroControl"];
      @$nombre = $_POST["nombre"];
      @$apePa = $_POST["apePa"];
      @$apeMa = $_POST["apeMa"];
      @$telefono = $_POST["telefono"];
      @$email = $_POST["email"];
      @$carrera = $_POST["carrera"];
      @$taller = $_POST["taller"];

      
      //Hacer sentencia
      $SQL = "CALL sp_actualizar_alumno('$matricula', '$nombre', '$apePa', '$apeMa', '$telefono', '$email', '$carrera', '$taller');";

      //Ejecutar sentencia
      $Ejecutar = mysqli_query($conec,$SQL);

      if(!$Ejecutar){
        echo"ERROR ";
      }else{
        header("Location: actualizar.php");
      }

     
  }

?>
