<?php

if(isset($_POST))
{
   require_once 'auxiliares/Consultas.php';

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
   $edad = $_POST['edad'];
   $sistema = php_uname();

   $objeto = new Consultas();
   $resultado = $objeto->insertarRegistro($nombre, $apellido , $edad , $correo , $telefono , $sistema);

   if($resultado){
      header("Location:index.php");
   }else{
      die("Hubo un problema al insertar el registro");
   }
}


 ?>
