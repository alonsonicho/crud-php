<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Capturamos el ID producto que enviamos desde el Listado de Productos
    $idproducto = $_GET['id_producto'];
    // Invocamos la funcion buscarProducto para obtener los datos del producto mediante su id y colocar sus datos en el formulario
    $datosProducto = buscarProducto($idproducto, $conexion);

    // Invocamos la funcion listarCategorias para rellenar el select 
    $listadoCategorias = listarCategorias($conexion);

    // Recorremos la fila de la tabla con la informacion del producto desde $datosProducto y asignamos variables para imprimirlas en el formulario
    while($res = mysqli_fetch_array($datosProducto)){
        $categoria = $res['categoria'];
        $marca = $res['marca'];
        $descripcion = $res['descripcion'];
        $precio = $res['precio'];
        $imagen = $res['foto'];
    }
?>

<?php include '../../includes/header.php'?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span class="fw-bold">EDITAR INFORMACION DEL PRODUCTO</span>
                </div>
                <form class="p-4" method="POST" action="../../llamadas/procesoEditarProducto.php">
                    <div class="mb-3">
                        <label class="form-label">Categoria : </label>
                        <select class="form-select" name="categoria" id="categoria">
                            <?php 
                                while($res = mysqli_fetch_array($listadoCategorias)) {
                            ?>
                                <option value="<?php echo $res['id_categoria']; ?>" selected><?php echo $res['nombre']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca: </label>
                        <input type="text" class="form-control" name="marca" required 
                        value="<?php echo $marca;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion: </label>
                        <input type="text" class="form-control" name="descripcion" autofocus required
                        value="<?php echo $descripcion;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="text" class="form-control" name="precio" autofocus required
                        value="<?php echo $precio;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" class="form-control" name="imagen" autofocus required
                        value="<?php echo $imagen;?>">
                    </div>
                    <input type="hidden" name="id_producto" value="<?php echo $idproducto;?>">
                    <div class="d-grid col-md-2 mx-auto">
                        <input type="submit" class="btn btn-primary" name="update" value="ACTUALIZAR REGISTRO" onClick="return confirm('¿Estás seguro/a de relizar este cambio?')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'?>