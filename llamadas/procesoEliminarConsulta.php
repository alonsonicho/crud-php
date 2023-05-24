<?php 

    require('../controlador/conexion.php');
    $conexion = conectar();

    if(isset($_GET['id_consulta'])){
        $id = $_GET['id_consulta'];
        eliminarConsulta($id, $conexion);
        header('location: ../paginas/paginasAdmi/consultas.php');
    }

?>

