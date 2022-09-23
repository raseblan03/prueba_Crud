<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>EDAD</td>
    </tr>
   <?php
   include "leer.php";
   foreach ($listaalumnos as $alumno)
   {     echo "         <tr>             <td>".$alumno['id']."</td>             <td>".$alumno['nombre']."</td>             <td>".$alumno['edad']."</td>        
        <td><a href='actualizar.php?id=".$alumno['id']."'>Editar</a></td>            
         <td><a href='borrar.php?id=".$alumno['id']."'>Borrar</a></td>         </tr>     "; }
   ?>
   </table>
</body>
</html>