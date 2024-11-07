<?php


require './../config/database.php';
$db = new Database();
$con = $db->conectar();

$correcto = false;

//Si trae ID es una actualizacion
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $nombre = $_POST['textNombre'];
    $apellido1 = $_POST['textApellido1'];
    $apellido2 = $_POST['textApellido2'];
    $telefono = $_POST['textTelefono'];
    $edad = $_POST['textEdad'];
    $sexo = $_POST['IdGenero'];
    $direccion = $_POST['textDireccion'];
  
    $query = $con->prepare("UPDATE tbl_persona SET nombre=?, apellido1=?, apellido2=?, telefono=? 
    , edad=?, sexo=?, direccion=? WHERE id=?");
    $resultado = $query->execute(array($nombre, $apellido1, $apellido2, $telefono,$edad,$sexo,$direccion, $id));

    if ($resultado) {
        header("Location: ./../shared/main.php?msj=actualizado");
       
    }

    $con=null;

    

} else { //Si no lo trae es un dato nuevo

    $nombre = $_POST['textNombre'];
    $apellido1 = $_POST['textApellido1'];
    $apellido2 = $_POST['textApellido2'];
    $telefono = $_POST['textTelefono'];
    $edad = $_POST['textEdad'];
    $sexo = $_POST['IdGenero'];
    $direccion = $_POST['textDireccion'];

    $query = $con->prepare("INSERT INTO tbl_persona (nombre, apellido1, apellido2, telefono, edad, sexo, direccion) VALUES (:nom,:apel1,:apel2, :tel, :edad, :sex, :dir)");
    $resultado = $query->execute(array('nom'=>$nombre,'apel1'=>$apellido1,'apel2'=>$apellido2,'tel'=>$telefono,'edad'=>$edad,'sex'=>$sexo,'dir'=>$direccion));

    if ($resultado) {

        header("Location: ./../shared/main.php?msj=insertado");

    }

    $con=null;

    
}

function regresar(){
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = './main.php?msj=actualizado';

//http://$host$uri/$extra
exit;
}



?>





  
  


