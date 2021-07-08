<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N4</title><br><br>
   <!-- codigo de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

<center><font color="mediumblue"><h1>Horario de Clase</h1></font></center>
<div class="containter bg-light text-center "><b>Nombre del estudiante: Jose A. Clara G.         Carrera: computación</b></div>
<center>    
<div class="container bg-light ">
    <table>
      <tr>
        <td><b> Hora </b></td>
        <td><b> Lunes </b></td>
        <td><b> Martes </b></td>
        <td><b> Mierc. </b></td>
        <td><b> jueves </b></td>
        <td><b> Viernes </b></td>
     </tr>


<?php $asig1="matemáticas";
$asig1="matemáticas";
$asig2="Programación";
$asig3="Algebra";
$asig4="Diseño Web";
$asig5="Algorítmica";
$asig6="Soporte";
$libre="Libre";
?>

<br><tr>
<td><?php echo "de 7:00 a 8:30"; ?></td>
<td><?php echo $asig2 ; ?></td>
<td><?php echo $asig3 ; ?></td>
<td><?php echo $asig1 ; ?></td>
<td><?php echo $libre ; ?></td>
<td><?php echo $asig2 ; ?></td>
</tr>

<tr>
<td><?php echo "de 8:30 a 10:00"; ?></td>
<td><?php echo $asig6 ; ?></td>
<td><?php echo $asig1 ; ?></td>
<td><?php echo $asig4 ; ?></td>
<td><?php echo $asig2 ; ?></td>
<td><?php echo $libre ; ?></td>
</tr>

<tr>
<td><?php echo "de 10:00 a 10:45"; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $libre  ; ?></td>
</tr>

<tr>
<td><?php echo "de 10:45 a 11:45"; ?></td>
<td><?php echo $asig3  ; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $asig5  ; ?></td>
<td><?php echo $asig4  ; ?></td>
<td><?php echo $asig1  ; ?></td>
</tr>

<tr>
<td><?php echo "de 11:45 a 12:30"; ?></td>
<td><?php echo $libre  ; ?></td>
<td><?php echo $asig4 ; ?></td>
<td><?php echo $asig3  ; ?></td>
<td><?php echo $asig2  ; ?></td>
<td><?php echo $asig4 ; ?></td>
</tr>

<tr>
<td><?php echo "de 12:30 a 1:45"; ?></td>
<td><?php echo $asig6 ; ?></td>
<td><?php echo $asig6 ; ?></td>
<td><?php echo $asig4  ; ?></td>
<td><?php echo $asig3  ; ?></td>
<td><?php echo $asig1 ; ?></td>
</tr>
</table>
</div>
</center>
    
</body>
</html>