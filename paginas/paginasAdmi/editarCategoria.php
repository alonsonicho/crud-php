<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Capturamos el id que enviamos desde el listado de categorias
    $id = $_GET['id'];

    // Invocamos la funcion para buscar la categoria y le pasamos el id que capturamos
    $resultado = buscarCategoria($id,$conexion);

    // Recorremos la data y lo capturamos para colocarla en el value del input
    while($res = mysqli_fetch_array($resultado)){
        $id = $res['id_categoria'];
        $nombre = $res['nombre'];
    }
?>

<?php include '../../includes/header.php'?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    <span class="fw-bold">ACTUALIZAR CATEGORIA</span>
                </div>
                <form class="p-4" method="POST" action="../../llamadas/procesoEditarCategoria.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre actual de categoria : </label>
                        <input type="text" class="form-control" name="cat"
                        value="<?php echo $nombre;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nuevo nombre de categoria : </label>
                        <input type="text" class="form-control" name="categoria" value="">
                        <input type="hidden" value="<?php echo $id;?>" name="id">
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="update" value="ACTUALIZAR" onClick="return confirm('¿Actualizar categoria?')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'?>