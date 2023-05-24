<?php 

    require('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_GET['id_reclamo'])){
        $id = $_GET['id_reclamo'];
        eliminarDataLibro($id, $conexion);
        header('location: ../paginas/paginasAdmi/listadoReclamos.php');
    }

?>