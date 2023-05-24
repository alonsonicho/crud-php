<?php
    include('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    //Invocamos la funcion para listar las categorias y mostrarlas en el listado
    $resultado = listarCategorias($conexion);   
?>

<?php include '../../includes/header.php'?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    <span class="fw-bold">REGISTRAR CATEGORIA</span>
                </div>

                <!-- FORMULARIO PARA REGISTRAR CATEGORIA -->
                <form class="p-4" method="POST" action="../../llamadas/procesoRegistrarCategoria.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre de categoria: </label>
                        <input type="text" class="form-control" name="categoria"
                        value="">
                    </div>
                    <div class="d-grid col-md-2 mx-auto">
                        <input type="submit" class="btn btn-primary" name="registro" value="REGISTRAR" onClick="return confirm('¿Registrar categoria?')">
                    </div>
                </form>
            </div>
                
                <div class="card mt-3">
                    <div class="card-header bg-success text-white fw-bold">
                        <span class="fw-bold">LISTADO DE CATEGORIAS</span>
                    </div>
                    <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID CATEGORIA</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    // La variable $resultado guardo nuestro listado de categorias, la recorremos mediante un while fila por fila
                                    while($res = mysqli_fetch_array($resultado)) { 		
                                        ?>
                                        <tr>
                                            <td><?php echo $res['id_categoria']; ?></td>
                                            <td><?php echo $res['nombre']; ?></td>
                                            <td><a class="text-success" href="editarCategoria.php?id=<?php echo $res['id_categoria']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                            <td><a onClick="return confirm('¿Eliminar categoria? Se eliminaran todos los productos!')" class="text-danger" href="../../llamadas/procesoEliminarCategoria.php?id_categoria=<?php echo $res['id_categoria']; ?>"><i class="bi bi-trash"></i></a></td>
                                        </tr>
                                        <?php
                                        }
                                ?>
                            </tbody>
                    </table>
                </div>

            <!-- </div> -->
        </div>
    </div>
</div>




<?php include '../../includes/footer.php'?>