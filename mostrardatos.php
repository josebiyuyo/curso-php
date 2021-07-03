<?php
//conexión a la base de datos
$conection= mysqli_connect('localhost','root','2021','listname');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos de la base de datos</title>
    <!-- codigo de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
     <div class="container bg-light text-center">
    <table>
        <tr>
         <td><h4>Nombre: </h4></td>
         <td><h4>Apellido: </h4></td>
         <td><h4>Edad:  </h4></td>
         <td><h4>Correo:  </h4></td>
        </tr>

<?php

 $sql="SELECT * from info";
 $resultado= mysqli_query($conection,$sql);

 while($mostrar=mysqli_fetch_array($resultado)){


 ?>


         <tr>
          <td><?php echo "<h5>". $mostrar['nombre'] ."</5>"?></td>
          <td><?php echo "<h5>".$mostrar['apellido'] ."</5>"?></td>
          <td><?php echo "<h5>".$mostrar['edad'] ."</5>"?></td>
          <td><?php echo "<h5>".$mostrar['correo'] ."</5>"?></td>
         </tr>
</div>
<?php
 }
 ?>
    </table>

</body>
</html>