<?php
    
    // Conexion con la base de datos
    require('../controlador/conexion.php');
    $conexion = conectar();


    if(isset($_POST['registroData'])){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $categoria = $_POST["categoria"];
        $motivo = $_POST["motivo"];
        $mensaje = $_POST["asunto"];

        registrarCliente($dni,$nombre,$apellido,$correo,$telefono,$conexion);
        $idcliente = mysqli_insert_id($conexion);
        registrarConsulta($idcliente,$categoria,$motivo,$mensaje,$conexion);
        header('Location: ../paginas/registro.php');

    }
    
?>