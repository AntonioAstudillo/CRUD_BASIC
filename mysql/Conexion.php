<?php

class Conexion{

   private $conexion;

   public function __construct(){
      require_once 'config/configuracion.php';

      $this->conexion = new Mysqli($hostname, $usuario , $pass , $db);

      if(mysqli_connect_errno()){
         die("Fallo la conexion");
      }

      $this->conexion->set_charset('utf8') or die("Fallo el charset");
   }

   public function getConexion(){
      return $this->conexion;
   }
}




?>
