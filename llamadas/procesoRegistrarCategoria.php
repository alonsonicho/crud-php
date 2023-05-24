<?php 

    include('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_POST['categoria'])){
        if(!empty($_POST["categoria"])){
            $nombreCategoria = $_POST["categoria"];
            registrarCategoria($nombreCategoria, $conexion);
            header('Location: ../paginas/paginasAdmi/categorias.php');
        }else{
            header('Location: ../paginas/paginasAdmi/categorias.php');
        }
        
    }

?>