<?php 

    include('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_GET['id_categoria'])){

        $codigo = $_GET['id_categoria'];
        // Llamado de funcion para eliminar la categoria por id
        $resultado = eliminarCategoria($codigo,$conexion);
        header('location: ../paginas/paginasAdmi/categorias.php');

    }
?>