<?php 

    include('../controlador/conexion.php');
    $conexion = conectar();

    $usuario=$_REQUEST['usuario'];
    $password=$_REQUEST['password'];

    $cantidadFilas = validarUsuario($usuario, $password, $conexion);

        if($cantidadFilas>0){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("location: ../paginas/paginasAdmi/clientes.php");
        }else{
            echo '<script> alert("USUARIO O CONTRASEÑA INCORRECTA");
            window.location = "../paginas/login.php";
            </script>';
        }

?>