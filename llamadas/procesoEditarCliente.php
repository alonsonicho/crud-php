<?php
    include('../controlador/conexion.php');
    $conexion = conectar();

    
    if(isset($_POST['update'])){	
        if(!empty($_POST["id"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["telefono"]) && !empty($_POST["correo"])){
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $dni = $_POST["dni"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];

            $resultado = actualizarCliente($id,$dni,$nombre,$apellido,$correo,$telefono,$conexion);
            header("location: ../paginas/paginasAdmi/clientes.php");
        }else{
            header("location: ../paginas/paginasAdmi/clientes.php");
        }
    }
?>