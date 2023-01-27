<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Datos Registrados</title>
</head>

<body class="b_ody">
<div class="container">
<?php
          $nombre=$_POST['nombre'];
          $nacimiento=$_POST['nacimiento'];
          $edad=$_POST['edad'];
          $carnet=$_POST['carnet'];

          echo "<div class=\"data\">";
          echo "<h4>DATOS INGRESADOS</h4>"; 
          echo "<table class=\"table table-bordered table-dark table-sm\">";
          echo "<tbody class=\"table-group-divider\">";
              echo "<tr>";
              echo "<th >Nombre Completo</th>";
              echo "<td>$nombre</td>";      
              echo "</tr>";
              echo "<tr>";
              echo"<th >Lugar de nacimiento</th>";
              echo"<td> $nacimiento  </td>";                            
              echo"</tr>";
              echo "<tr>";
              echo"<th >Edad</th>";      
              echo"<td> $edad  </td>"; 
              echo "</tr>";
              echo "<tr>";
              echo "<th >Carnet</th>";
              echo"<td> $carnet  </td>";       
              echo "</tr>";
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
                       
?>
 
 

 <a href="datos.html"><input class="boton_p"  type="submit" value="Ingresar nuevos datos"></a>
 </div>

</body>
</html>