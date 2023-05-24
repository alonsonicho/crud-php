<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }
    
    // Invocamos funcion para obtener la data de la tabla categorias y colocar sus valores dentro del select en el formulario
    $resultado = listarCategorias($conexion);
?>

<?php include '../../includes/header.php'?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    <span class="fw-bold">REGISTRAR PRODUCTO</span>
                </div>
                <form class="p-4" method="POST" action="../../llamadas/procesoRegistrarProducto.php">
                    <div class="mb-3">
                        <label class="form-label">Seleccionar categoria : </label>
                        <select class="form-select" name="categoria" id="categoria">
                            <option value="" disabled selected>Seleccionar</option>
                            <?php 
                                while($res = mysqli_fetch_array($resultado)) {
                            ?>
                                <option value="<?php echo $res['id_categoria']; ?>"><?php echo $res['nombre']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca: </label>
                        <input type="text" class="form-control" name="marca" 
                        value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion: </label>
                        <input type="text" class="form-control" name="descripcion" 
                        value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="text" class="form-control" name="precio" 
                        value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" class="form-control" name="imagen" 
                        value="">
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="registro" value="REGISTRAR" onClick="return confirm('¿Registrar producto?')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include '../../includes/footer.php'?>