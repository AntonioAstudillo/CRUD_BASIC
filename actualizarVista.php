<?php

if(isset($_GET['id']))
{
   $id = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Actualizar Usuario</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
      <style media="screen">
         body{
           background-color: #4D5057;
         }

         body > div{
            background: white;
         }

         .color-h1{
            color: #4DA167;
         }

      </style>
   </head>
   <body>
      <div class="container border mt-5 mb-2">
         <div class="col-auto text-center color-h1 font-weight-bold">
            <h1>Formulario de Actualización</h1>
         </div>
         <form class="form-group" action="actualizarModelo.php?id=<?php echo $id; ?>" method="post" autocomplete="off">
            <div class="row">
               <div class="col-6">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" placeholder="Ingrese nuevo nombre" class="form-control">
               </div>
               <div class="col-6">
                  <label for="apellido">Apellido</label>
                  <input type="text" name="apellido" placeholder="Ingrese nuevo apellido" class="form-control">
               </div>
            </div>

            <div class="row mt-4">
               <div class="col-4">
                  <label for="telefono">Telefono</label>
                  <input class="form-control" type="text" name="telefono" placeholder="Telefono...">
               </div>
               <div class="col-4">
                  <label for="correo">Correo</label>
                  <input class="form-control" type="text" name="correo" placeholder="Correo...">
               </div>
               <div class="col-4">
                  <label for="edad">Edad</label>
                  <input class="form-control" type="text" name="edad" placeholder="Edad...">
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-auto text-center mt-5 mb-2">
                  <input class="btn btn-secondary form-control" type="submit" value="Actualizar">
               </div>
            </div>
         </form>
     </div>
   </body>
</html>
