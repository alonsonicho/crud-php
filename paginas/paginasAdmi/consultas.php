
<?php
    require('../../controlador/conexion.php');
    $conexion = conectar();

    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: ../../paginas/login.php");
    }

    // Funcion para listar consultas y la asignamos a $resultado
    $resultado = listarConsultas($conexion);
?>

<?php include '../../includes/header.php'?>
<body>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white fw-bold">
                    LISTA DE CONSULTAS
                </div>
                <div class="p-4">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Categoria</th>
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
                                    <td><?php echo $res['id_consulta']; ?></td>
                                    <td><?php echo $res['id_cliente']; ?></td>
                                    <td><?php echo $res['nombre']; ?></td>
                                    <td><?php echo $res['correo']; ?></td>
                                    <td><?php echo $res['nombre']; ?></td>
                                    <td><?php echo $res['motivo']; ?></td>
                                    <td><?php echo $res['asunto']; ?></td>
                                    <td><a onClick="return confirm('¿Estás seguro/a de eliminar la consulta?')" class="text-danger" href="../../llamadas/procesoEliminarConsulta.php?id_consulta=<?php echo $res['id_consulta']; ?>"><i class="bi bi-trash"></i></a></td>
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