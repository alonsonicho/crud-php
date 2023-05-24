<?php 

    include('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_GET['id_producto'])){

        $idproducto = $_GET["id_producto"];
        eliminarProducto($idproducto, $conexion);
        header('Location: ../paginas/paginasAdmi/listadoProductos.php');
        
    }
    
?>