<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();
    
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Invocamos la funcion que nos retorne el listado de productos
    $resultado = listarProductos2($conexion);
?>

<?php include '../../includes/header.php'?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
        <button type="button" class="btn btn-success mb-3"><a class="text-decoration-none text-white" href="registroProducto.php">Registrar Producto</a></button>
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    LISTA DE PRODUCTOS
                </div>
                <div class="p-4">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($res = mysqli_fetch_array($resultado)) { 		
                                ?>
                                <tr>
                                    <td><?php echo $res['id_producto']; ?></td>
                                    <td><?php echo $res['nombre']; ?></td>
                                    <td><?php echo $res['marca']; ?></td>
                                    <td><?php echo $res['descripcion']; ?></td>
                                    <td>$<?php echo $res['precio']; ?></td>
                                    <td><img src="../../imagenes/<?php echo $res['foto']; ?>" width="80"></td>
                                     <td><a class="text-success" href="editarProducto.php?id_producto=<?php echo $res['id_producto']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onClick="return confirm('¿Estás seguro/a de eliminar producto?')" class="text-danger" href="../../llamadas/procesoEliminarProducto.php?id_producto=<?php echo $res['id_producto']; ?>"><i class="bi bi-trash"></i></a></td> 
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