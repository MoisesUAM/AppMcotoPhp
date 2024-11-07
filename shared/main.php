<!doctype html>
<html lang="en">

<head>
    <title>Lista de Personas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <!-- Bootstrap CSS v5.0.2 -->
</head>

<body class="bg-light">
    <?php include "./header.php";?>
    <?php
        if(!isset($_GET['msj'])) {
            $Id = null;
         }else{
            $Id = $_GET['msj'];
         }
        
     ?>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 v-hr mx-0">
                <?php include "sidebar.php";?>
            </div>
            <div class="col-10 v-hr mx-0">
                <?php include "./../views/view.tabla.personas.php"?>
            </div> 
        </div>

    </div>




    <?php include "./footer.php";?>

    <!-- Bootstrap JavaScript Libraries -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./../js/jquery.min.js"></script>
    <script src="./../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="./../js/funciones.js"></script>
    <script src="./../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</body>

</html>