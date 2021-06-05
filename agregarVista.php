<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Agregar Usuario</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container border">
         <form action="agregar.php" method="post" autocomplete="off">
            <div class="row">
               <div class="col">
                  <label for="nombre">Nombre</label>
                  <input class="form-control" type="text" name="nombre" placeholder="Ingrese nombre...">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="apellido">Apellido</label>
                  <input class="form-control" type="text" name="apellido" placeholder="Ingrese apellido...">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="edad">Edad</label>
                  <input class="form-control" type="text" name="edad" placeholder="Ingrese edad">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="telefono">Telefono</label>
                  <input class="form-control" type="text" name="telefono" placeholder="Ingrese telefono">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="correo">Correo</label>
                  <input class="form-control" type="text" name="correo" placeholder="Ingrese correo">
               </div>
            </div>

            <div class="row mt-3">
               <div class="col">
                  <input class="btn btn-primary" type="submit"  value="Agregar">
               </div>
            </div>
         </form>
      </div>
   </body>
</html>
