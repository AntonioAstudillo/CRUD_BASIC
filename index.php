<?php
require_once 'auxiliares/Consultas.php';
$objeto = new Consultas();
$resultado = $objeto->contarRegistros();
$maximoElementos = $resultado->fetch_array();

$pagina = (isset($_GET['pag'])) ? $_GET['pag'] : 1;
$resultado = $objeto->leerRegistros($pagina);
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>CRUD BÁSICO</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
   </head>
   <body>
      <div class="col-auto text-center">
         <h1 class="h1">CRUD CLIENTES</h1>
      </div>
      <div class="container">
         <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">id</th>
                  <th scope="col">nombre</th>
                  <th scope="col">apellido</th>
                  <th scope="col">telefono</th>
                  <th scope="col">correo</th>
                  <th scope="col">edad</th>
                  <th scope="col">Operacion</th>
                  <th scope="col"><a href="#"><i class="fas fa-address-card"></i></a></th>
               </tr>
            </thead>
            <tbody>
               <?php while($registro = $resultado->fetch_assoc()): ?>
                  <tr>
                     <td><?php echo $registro['id']; ?></td>
                     <td><?php echo $registro['nombre']; ?></td>
                     <td><?php echo $registro['apellido']; ?></td>
                     <td><?php echo $registro['telefono']; ?></td>
                     <td><?php echo $registro['correo']; ?></td>
                     <td><?php echo $registro['edad']; ?></td>
                     <td><a class="btn btn-primary" href="actualizar.php?id=<?php echo $registro['id']; ?>">Actualizar</a> </td>
                     <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $registro['id']; ?>">Eliminar</a> </td>
                  </tr>
               <?php endwhile; ?>
            </tbody>
         </table>
         <div class="d-flex justify-content-center">
            <ul class="pagination">
               <!-- Si existe el parametro pag -->
               <?php if(isset($_GET['pag'])): ?>
                  <!-- Si pag es mayor que 1, ponemos un enlace al anterior -->
                  <?php if($_GET['pag'] > 1):  ?>
                     <li class="page-item"><a class="page-link" href="index.php?pag=<?php echo $_GET['pag'] - 1; ?>">Anterior</a></li>
                  <?php else: ?>
                     <li disabled class="page-item"><a class="page-link" href="#">Anterior</a></li>
                  <?php endif; ?>
               <?php else: ?>
                  <li disabled class="page-item"><a class="page-link" href="#">Anterior</a></li>       <!-- Sino deshabilito el botón -->
               <?php endif;?>

               <?php if(isset($_GET['pag'])): ?>
                  <?php if( ($pagina*8) < $maximoElementos[0]): ?>
                     <li class="page-item"><a class="page-link" href="index.php?pag=<?php echo $_GET['pag'] + 1;?>">Siguiente</a></li>
                  <?php else: ?>
                     <li disabled class="page-item"><a disabled class="page-link" href="">Siguiente</a></li>
                  <?php endif; ?>
               <?php else: ?>
                  <li disabled class="page-item"><a disabled class="page-link" href="index.php?pag=2">Siguiente</a></li>
               <?php endif; ?>
            </ul>
         </div>
      </div>
   </body>
</html>
