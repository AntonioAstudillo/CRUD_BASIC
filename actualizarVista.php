<?php

if(isset($_GET['id']))
{
   require_once 'auxiliares/Consultas.php';
   $id = $_GET['id'];
   $objeto = new Consultas();
   $resultado = $objeto->obtenerRegistro($id);
   $registro = $resultado->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Actualizar Usuario</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <style media="screen">

         body > div{
            background: white;
         }

         .color-h1{
            color: #08090A;
         }

      </style>
   </head>
   <body>
      <div class="container border border-info mt-5 mb-2 rounded">
         <div class="col-auto text-center color-h1 font-weight-bold">
            <h1>Formulario de Actualización</h1>
         </div>
         <form class="form-group" action="actualizarModelo.php?id=<?php echo $id; ?>" method="post" autocomplete="off">
            <div class="row">
               <div class="col-6">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" placeholder="Ingrese nuevo nombre"  class="form-control" value="<?php if(isset($registro['nombre'])){echo $registro['nombre'];} ?>">
               </div>
               <div class="col-6">
                  <label for="apellido">Apellido</label>
                  <input type="text" name="apellido" placeholder="Ingrese nuevo apellido" class="form-control" value="<?php if(isset($registro['apellido'])){echo $registro['apellido'];} ?>">
               </div>
            </div>

            <div class="row mt-4">
               <div class="col-4">
                  <label for="telefono">Telefono</label>
                  <input class="form-control" type="text" name="telefono" placeholder="Telefono..." value="<?php if(isset($registro['telefono'])){echo $registro['telefono'];} ?>">
               </div>
               <div class="col-4">
                  <label for="correo">Correo</label>
                  <input class="form-control" type="text" name="correo" placeholder="Correo..." value="<?php if(isset($registro['correo'])){echo $registro['correo'];} ?>">
               </div>
               <div class="col-4">
                  <label for="edad">Edad</label>
                  <input class="form-control" type="text" name="edad" placeholder="Edad..." value="<?php if(isset($registro['edad'])){echo $registro['edad'];} ?>">
               </div>
            </div>

            <div class="row d-flex justify-content-between">
               <div class="col-3 mt-5 mb-2">
                  <input class="btn btn-success form-control font-weight-bold" type="submit" value="Actualizar">
               </div>
               <div class="col-3 mt-5 mb-2">
                  <a href="index.php" class="btn btn-danger font-weight-bold">Cancelar</a>
               </div>
            </div>
         </form>
     </div>
   </body>
</html>
