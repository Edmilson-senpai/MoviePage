<?php
    /*-------------------------*/
    /*Conexion A BD*/
    /*-------------------------*/
    function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "80618061";
    $db = "proyecto";

    return mysqli_connect($host,$user,$pass,$db);
    }
?>