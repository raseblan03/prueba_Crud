<?php
include "configuracion.php";

$servidor= "mysql:host=" .SERVIDOR. ";dbname=".BD.";";

try{
$pdo = new PDO ($servidor, USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
echo "<script>alert('Conexión establecida con éxito') </script>";
}
catch(exception $e){
    echo "<script>alert('Conexión fallida ') </script>";
}