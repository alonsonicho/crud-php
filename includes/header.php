<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Administrador</title>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center text-white">Usuario : <?= $_SESSION['usuario'] ?></h3>
                </header>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse justify-content-center col-md-12">
                <ul class="navbar-nav me-auto col-md-12">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="clientes.php">Listado Clientes |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="consultas.php">Listado de Consultas |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="listadoReclamos.php">Listado de Reclamos |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="listadoProductos.php">Productos |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="categorias.php">Categorias |</a>
                    </li>
                    <li class="nav-item">
                        <a onClick="return ConfirmCerrar('¿Estás seguro/a de cerrar sesion?')" class="nav-link text-white" href="../../llamadas/procesoCerrarSesion.php">Cerrar Sesion |</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    