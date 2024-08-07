<?php
    //Definiendo nick y clave
    $email = 'luisfer@hotmail.com';
    $password = '12345678';
    
    //Leer el valor de la caja de texto
    $emailIng = $_POST["txtEmail"];
    $passwordIng = $_POST["txtClave"];
    
    if($emailIng==$email && $passwordIng==$password){

        echo "<script> alert('Bienvenido $email'); window.location='../PHome.html' </script>";

    }
    else if($email<>$emailIng && $password==$passwordIng){
        echo "<script> alert('Email incorrecto'); window.location='InicioSesion.html' </script>";
    }
    else if($email==$emailIng && $password<>$passwordIng){
        echo "<script> alert('Password Incorrecto'); window.location='InicioSesion.html' </script>";
    }
    else{
        echo "<script> alert('Email y Password Incorrectos'); window.location='InicioSesion.html' </script>";
    }



?>
