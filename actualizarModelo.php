<?php

if(isset($_POST) && isset($_GET['id'])){
   require_once 'auxiliares/Consultas.php';

   $id = $_GET['id'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $edad = $_POST['edad'];
   $correo = $_POST['correo'];
   $telefono =$_POST['telefono'];
   $objeto = new Consultas();
   $resultado =$objeto->actualizarRegistro($id , $nombre , $apellido , $telefono , $edad , $correo);

   if($resultado){
      header("Location:index.php");
   }else{
      die("Hubo un problema al actualizar el registro");
   }
}



 ?>
