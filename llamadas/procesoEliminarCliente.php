<?php 

    include('../controlador/conexion.php');
    $conexion = conectar();
    
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // Llamado de funcion para eliminar el cliente por su id
        $resultado = eliminarCliente($id, $conexion);
        header('location: ../paginas/paginasAdmi/clientes.php');
    }

?>