<?php
//En este archivo voy a realizar las consultas a la base de datos

require_once 'mysql/Conexion.php';

class Consultas
{

   public function leerRegistros()
   {
      $conexion = new Conexion();
      $conexion = $conexion->getConexion();
      $consulta = "SELECT * FROM contactos ORDER BY id";
      $resultado = $conexion->query($consulta);

      if($resultado){
         return $resultado;
      }else{
         return false;
      }
   }
}



 ?>
