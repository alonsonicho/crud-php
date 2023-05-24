<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Funcion para listar consultas y la asignamos a $resultado
    $resultado = listarDataLibro($conexion);
?>

<?php include '../../includes/header.php'?>


<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    LISTA DE RECLAMOS
                </div>
                <div class="p-4">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">ID RECLAMO</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Bien contratado</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php 
                            // Recorremos la variable $resultado que guardo nuestra lista de consultas
                            while($res = mysqli_fetch_array($resultado)) {
                                ?>
                                <tr>
                                    <td><?php echo $res['id_reclamo']; ?></td>
                                    <td><?php echo $res['id_cliente']; ?></td>
                                    <td><?php echo $res['correo']; ?></td>
                                    <td><?php echo $res['bien_contratado']; ?></td>
                                    <td>$<?php echo $res['monto']; ?></td>
                                    <td><?php echo $res['motiva']; ?></td>
                                    <td><?php echo $res['descripcion']; ?></td>
                                    <td><a onClick="return confirm('¿Estás seguro/a de eliminar el registro del reclamo?')" class="text-danger" href="../../llamadas/procesoEliminarReclamo.php?hola=<?php echo $res['id_reclamo']; ?>"><i class="bi bi-trash"></i></a></td>
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