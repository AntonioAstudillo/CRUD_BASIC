<?php

if(isset($_GET['id'])){

   require_once 'auxiliares/Consultas.php';
   $id = $_GET['id'];
   $objeto = new Consultas();

   $resultado = $objeto->eliminarRegistro($id);

   if($resultado){
      header("Location:index.php");
   }else{
      die("Hubo un problema al eliminar el registro");
   }


}

 ?>
