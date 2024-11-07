<?php

$id = $_GET['id'];
require './../config/database.php';
$db = new Database();
$con = $db->conectar();

$query = $con->prepare("DELETE FROM tbl_persona WHERE id=?");
$resultado = $query->execute(array($id));

if($resultado){
    header('Location: ./../shared/main.php?msj=eliminado');
}


?>