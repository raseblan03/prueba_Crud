<?php
require_once "conexion.php";
$sentencia = $pdo->prepare("SELECT * FROM tbl_alumnos");
$sentencia->execute();

$listaalumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
