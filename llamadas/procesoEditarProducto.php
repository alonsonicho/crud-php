<?php
    include('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_POST['update'])){
        if(!empty($_POST['id_producto']) && !empty($_POST['categoria']) && !empty($_POST['marca']) && !empty($_POST['descripcion']) && !empty($_POST['precio']) && !empty($_POST['imagen'])){
            $codigo = $_POST['id_producto'];
            $categoria = $_POST["categoria"];
            $marca = $_POST["marca"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];

            $resultado = actualizarProducto($codigo, $categoria, $marca, $descripcion, $precio, $imagen, $conexion);
            header('location: ../paginas/paginasAdmi/listadoProductos.php');   
        }else{
            header('location: ../paginas/paginasAdmi/listadoProductos.php');
        }   
    }	
?>