<?php

    include('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_POST['update'])){	
        if(!empty($_POST["id"]) && !empty($_POST["categoria"])){
            $id = $_POST["id"];
            $nombre = $_POST["categoria"];

            actualizarCategoria($id, $nombre, $conexion);
            header("location: ../paginas/paginasAdmi/categorias.php");
        }else{
            header("location: ../paginas/paginasAdmi/categorias.php");
        }
    }

?>