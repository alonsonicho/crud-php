<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Capturamos el id  que enviamos desde el listado de clientes
    $id = $_GET['id'];

    // Buscamos la data del cliente mediante su id para colocar los value en los input
    $resultado = buscarCliente($id, $conexion);

    while($res = mysqli_fetch_array($resultado))
        {
            $id_cliente = $res['id_cliente'];
            $nombre = $res['nombre'];
            $apellido = $res['apellidos'];
            $correo = $res['correo'];
            $celular = $res['celular'];
        }
?>

<?php include '../../includes/header.php'?>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span class="fw-bold">EDITAR INFORMACION DEL CLIENTE : <?php echo $id_cliente;?></span>
                </div>
                <form class="p-4" method="POST" action="../../llamadas/procesoEditarCliente.php">
                    <div class="mb-3">
                        <label class="form-label">DNI: </label>
                        <input type="text" class="form-control" name="dni" value="<?php echo $id_cliente;?>">
                        <input type="hidden" value="<?php echo $id;?>" name="id">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="apellido" value="<?php echo $apellido;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="correo" value="<?php echo $correo;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="text" class="form-control" name="telefono" value="<?php echo $celular;?>">
                    </div>
                    <div class="d-grid col-md-2 mx-auto">
                        <input type="submit" class="btn btn-primary" name="update" value="ACTUALIZAR REGISTRO" onClick="return confirm('¿Estás seguro/a de relizar este cambio?')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include '../../includes/footer.php'?>