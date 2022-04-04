<?php

class conn{

    private $server;
    private $user;
    private $password;
    private $dataBase;
    private $conexion;

    function __construct(){
        $this->server   = "localhost";
        $this->user     = "root";
        $this->password = "";
        $this->dataBase = "proyecto_l";

    }

    function AbrirBD(){

        $this->conexion = new mysqli($this->server,$this->user,$this->password,$this->dataBase);

        if (!$this->conexion) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
          }
    
        return $this->conexion;

    }

    function CerrarBD(){
      $this->conexion->close();
    }


}

?>