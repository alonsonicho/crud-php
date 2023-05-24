<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamaciones</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reclamaciones.css">
</head>
<body>
    
<header>
		<h2 class="titulo-index">IMPORTACIONES TECNOLOGICAS PC-COMPUTERS</h2>
		<nav>
			<ul><a href="registro.php">Consultas</a></ul>
			<ul><a href="../index.php">Nosotros</a></ul>
			<ul><a href="../index.php">Ofrecemos</a></ul>
			<ul><a href="../paginas/listadoProductos.php">Productos</a></ul>
			<ul><a href="reclamaciones.php">Libro de Reclamaciones</a></ul>
		</nav>
</header>

<section>

    <form id="form-reclamaciones" action="../llamadas/procesoRegistrarReclamo.php" method="POST">
        <div class="divLibro">
            <img src="../imagenes/libro.png" class="libroReclamo">
        </div>
        <div class="divTittle">
            <p>Conforme a lo establecido en el Código de Protección y Defensa del Consumidor ponemos a tu disposición nuestro Libro de Reclamaciones.Todos los campos son obligatorios</p>
        </div>
        <div>
            <h3>Datos personales :</h3>
        </div>
        <div class="divForm">
            <label>Nombres</label>
            <input type="text" name="nombre" value="" id="nombre" class="nombre" required>
        </div>
        <div class="divForm">
            <label>Apellidos</label>
            <input type="text" name="apellido" value="" id="apellido" class="apellido" required>
        </div>
        <div class="divForm"> 
            <label>DNI</label>
            <input type="text" name="dni" value="" id="dni" class="dni" required>
        </div>
        <div class="divForm">
            <label>Telefono</label>
            <input type="text" name="telefono" value="" id="telefono" class="telefono" required>
        </div>
        <div class="divForm">
            <label>Correo</label>
            <input type="email" name="correo" value="" id="correo" class="correo" required>
        </div>
        <div>
            <h3>Detalle de la queja o reclamo :</h3>
        </div>
        <div class="divForm">
            <label>Identificacion del bien contratado</label>
            <div class="identificacion">
				<input type="radio" name="identificacionBien" value="Producto" required>
				<span>Producto</span>
			</div>
            <div class="identificacion">
				<input type="radio" name="identificacionBien" value="Servicio" required>
				<span>Servicio</span>
			</div>
        </div>
        <div class="divForm">
            <label>Monto del reclamo</label>
            <input type="text" name="monto" value="" id="monto" class="monto" required>
        </div>
        <div class="divForm">
            <label>Motivo del reclamo o queja</label>
            <select name="motivo" value="" id="motivo" class="motivo" required>
                <option value="" disabled selected>Seleccionar motivo</option>
                <option value="Cambio/Devolucion">Cambio/Devolucion</option>
                <option value="Envio a domicilio">Envio a domicilio</option>
                <option value="Devolucion pendiente">Devolucion pendiente</option>
                <option value="Garantia de producto">Garantia de producto</option>
                <option value="Producto errado">Producto errado</option>
                <option value="Producto fallido">Producto fallido</option>
                <option value="Producto incompleto">Producto incompleto</option>
            </select>
        </div>
        <div class="divForm">
            <label>Descripción del producto o servicio adquirido</label>
            <textarea name="descripcion" value="" id="descripcion" class="descripcion" required></textarea>
        </div>
        <div id="bloque">
            <!-- Insertar mensajes error -->
        </div>
        <div class="divForm">
            <input type="submit" id="enviar" name="reclamos" value="ENVIAR">
        </div>
    </form>

</section>


<?php
    include('../includes/footerCliente.php');
?>

<script src="../js/reclamaciones.js"></script>
</body>
</html>