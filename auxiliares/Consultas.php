<?php
//En este archivo voy a realizar las consultas a la base de datos

require_once 'mysql/Conexion.php';

class Consultas
{
   private $conexion;

   public function __construct(){
      $conexion = new Conexion();
      $this->conexion = $conexion->getConexion();
   }
   //leo todos los registros
   public function leerRegistros($pagina)
   {
      $numElementos = 8;
      $consulta = "SELECT * FROM contactos ORDER BY id LIMIT " . (($pagina - 1) * $numElementos)  . "," . $numElementos;
      $resultado = $this->conexion->query($consulta);

      if($resultado){
         return $resultado;
      }else{
         return false;
      }
   }

   //Este metodo me va servir para saber cuantos registros hay en la tabla
   public function contarRegistros()
   {
      $consulta = "SELECT count(*) FROM contactos";
      $resultado = $this->conexion->query($consulta);

      if($resultado){
         return $resultado;
      }else{
         return false;
      }

   }

   public function actualizarRegistro($id , $nombre , $apellido , $telefono , $edad , $correo){

      $consulta = "UPDATE contactos SET nombre = '$nombre' , apellido = '$apellido', telefono  = '$telefono' , edad = '$edad' , correo = '$correo' WHERE id = '$id';";

      $resultado = $this->conexion->query($consulta);

      if($resultado && $this->conexion->affected_rows != 0){
         return true;
      }else{
         return false;
      }
   }

   public function obtenerRegistro($id){
      $consulta = "SELECT * FROM contactos WHERE id = '$id';";
      $resultado = $this->conexion->query($consulta);

      if($resultado){
         return $resultado;
      }else{
         return false;
      }
   }

   public function eliminarRegistro($id){
      $consulta = "DELETE FROM contactos WHERE id = '$id';";

      $resultado = $this->conexion->query($consulta);

      if($resultado && $this->conexion->affected_rows != 0){
         return true;
      }else{
         return false;
      }
   }

   public function insertarRegistro($nombre, $apellido , $edad , $correo , $telefono , $sistema){
      $consulta = "INSERT INTO contactos VALUES(null,'$nombre','$apellido','$telefono','$correo','$edad','$sistema');";
      $resultado = $this->conexion->query($consulta);

      if($resultado && $this->conexion->affected_rows != 0){
         return true;
      }else{
         return false;
      }
   }
}



 ?>
