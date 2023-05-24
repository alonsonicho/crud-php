
<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }
   
    // Invocamos la funcion para obtener todos los datos de la tabla clientes y listarlos
    $resultado = listarClientes($conexion);
?>

<?php include '../../includes/header.php'?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    LISTA DE CLIENTES
                </div>
                <div class="p-4">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID Registro</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Celular</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($res = mysqli_fetch_array($resultado)) { 		
                                ?>
                                <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['id_cliente']; ?></td>
                                    <td><?php echo $res['nombre']; ?></td>
                                    <td><?php echo $res['apellidos']; ?></td>
                                    <td><?php echo $res['correo']; ?></td>
                                    <td><?php echo $res['celular']; ?></td>
                                    <td><a class="text-success" href="editarCliente.php?id=<?php echo $res['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onClick="return confirm('¿Estás seguro/a de eliminar al cliente?')" class="text-danger" href="../../llamadas/procesoEliminarCliente.php?id=<?php echo $res['id']; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                                <?php
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'?>
