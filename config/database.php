<?php

class database
{
    private $hostname = "www.mcoto.net";
    private $database = "start_app_db";
    private $username = "mcoto";
    private $password = 'Andresmo@1882';
    private $charset = "utf8";

    function conectar()
    {
        try {

            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            return $pdo;

            echo'si hay conexion';
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}

?>
