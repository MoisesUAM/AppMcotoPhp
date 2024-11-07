<?php
$Id = $_GET['id'];
//echo '<a>La variable recibida es= </a>'. $Id;

require './../config/database.php';
$db = new database();
$con = $db->conectar();
$comando = $con->prepare("SELECT * FROM tbl_persona WHERE ID= :id");
$comando->execute(['id'=>$Id]);
$row = $comando->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Formulario de edicion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include "./../shared/header.php"?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 v-hr mx-0 my-5">
                <?php include "./../shared/sidebar.php";?>
            </div>
            <div class="col-10 v-hr mx-0 my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-body bg-light fw-bold fs-5">
                                    <h5 class="card-title">Editar un Registro</h5>
                                    <hr>

                                    <form class="form-row" method="POST" action="./../controllers/ctr.insertar.php?id=<?php echo $_GET['id'];?>">
                                    <div class="col">
                                            <label for="textID" class="form-label">ID</label>
                                            <input type="text" class="form-control" name="textID"
                                                value="<?php echo $row['id'];?>" autocomplete="off" disabled>
                                        </div>
                                        <div class="col">
                                            <label for="textNombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="textNombre"
                                                placeholder="Digite el nombre" required value="<?php echo $row['nombre'];?>" autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <label for="textApellido1" class="form-label">Primer Apellido</label>
                                            <input type="text" class="form-control" name="textApellido1"
                                                placeholder="Digite el primer apellido" required value="<?php echo $row['apellido1'];?>" autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <label for="textApellido2" class="form-label">Segundo Apellido</label>
                                            <input type="text" class="form-control" name="textApellido2"
                                                placeholder="Digite el segundo apellido" value="<?php echo $row['apellido2'];?>"autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <label for="textTelefono" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" name="textTelefono"
                                                placeholder="Digite el # Telefonico" required value="<?php echo $row['telefono'];?>"autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <label for="textEdad" class="form-label">Edad</label>
                                            <input type="number" class="form-control" name="textEdad"
                                                placeholder="Digite su edad" required value="<?php echo $row['edad'];?>"autocomplete="off">
                                        </div>
                                        <div class="col">
                                            <label for="inputState" class="form-label">Genero</label>
                                            <select name="IdGenero" class="form-select"
                                                placeholder="Seleccione una opcion" defaultvalue="<? echo $row['sexo']?>">
                                                <option>M</option>
                                                <option>F</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="textDireccion" class="form-label">Direccion</label>
                                            <input type="text" class="form-control" name="textDireccion"
                                                placeholder="Direccion" required value="<?php echo $row['direccion'];?>"autocomplete="off">
                                        </div>
                                        <br>

                                        <div class="d-grid gap-2">
                                        <input class="btn btn-primary btn-block" type="submit" value="Editar">
                                        </div>
                                    </form>
                                     
                                    <?php $con = null?>


                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>