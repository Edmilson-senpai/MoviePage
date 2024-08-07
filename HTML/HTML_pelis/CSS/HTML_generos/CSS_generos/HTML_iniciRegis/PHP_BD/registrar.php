<?php 

    include("conexion.php");
    $conex = conectar();
    /*-------------------------*/
    /*REGISTRO DE USUARIOS*/
    /*-------------------------*/

    if(isset($_POST['btnRegistrar'])){
        if(strlen($_POST['txtNombre']) >= 1 && strlen($_POST['txtUser']) >= 1 && strlen($_POST['txtEmail']) >= 1 &&  strlen($_POST['txtClave']) >= 1 && strlen($_POST['txtClaveR']) >= 1){
            $nombres = trim($_POST['txtNombre']);
            $user = trim($_POST['txtUser']);
            $email = trim($_POST['txtEmail']);
            $clave = trim($_POST['txtClave']);
            $repass = trim($_POST['txtClaveR']);

            if ($clave === $repass) {
                $consulta = "INSERT INTO registro(user,nombres,email,clave) VALUES ('$user','$nombres','$email','$clave')";

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "<script> alert('DATOS INGRESADOS CORRECTAMENTE'); window.location='/proyecto_final_s18/HTML/HTML_pelis/CSS/HTML_generos/CSS_generos/HTML_iniciRegis/InicioSesion.html'  </script>";
                }
                else{
                    echo "<script> alert('DATOS NO INGRESADOS'); window.location='Registro.html'</script>";
                }
            } else {
                //echo "<script> alert('CONTRASEÑAS NO COINCIDEN'); window.location='Registro.html'</script>";
            }
 
        }else{
            echo "<script> alert('COMPLETE LOS CAMPOS'); window.location='Registro.html'</script>";
        }
    }

    /*-------------------------*/
    /*VALIDACION DE INICIO DE SESION*/
    /*-------------------------*/

    $errorlogin = "Usuario Y/O Contraseña Incorrectos";

    if(isset($_POST["btnIngresar"])){

        $email_i = trim($_POST['txtEmail_i']);
        $clave_i = trim($_POST['txtClave_i']);

        $query = mysqli_query($conex,"SELECT * FROM registro WHERE email = '$email_i' AND clave='$clave_i'");
        $nr = mysqli_num_rows($query);
        
        if($nr==1)
        {

            echo "<script type='text/javascript'> 
                        function mostrar(){
                            swal('Bienvenido')
                        }
                  </script>";


            echo "<script> alert('Bienvenido $email_i'); 
            window.location='/proyecto_final_s18/HTML/Coment_Pelis.html'  </script>";
        }else
        {
            return $errorlogin;
            //echo "<script> alert('Usuario no existe'); window.location='InicioSesion.html' </script>";
        }
    }

    
?>