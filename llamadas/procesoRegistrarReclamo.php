<?php
    
    // Conexion con la base de datos
    require('../controlador/conexion.php');
    $conexion = conectar();


    if(isset($_POST['reclamos'])){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];

        $bien = $_POST["identificacionBien"];
        $monto = $_POST["monto"];
        $motivo = $_POST["motivo"];
        $descripcion = $_POST["descripcion"];

        registrarCliente($dni,$nombre,$apellido,$correo,$telefono,$conexion);
        $idcliente = mysqli_insert_id($conexion);
        registrarDataLibro($idcliente,$bien,$monto,$motivo,$descripcion,$conexion);
        header('Location: ../paginas/reclamaciones.php');

    }
    
?>