<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
	include('../controlador/conexion.php');
	$conexion = conectar();
	$reservas = "SELECT * FROM (`categoria`)";
	$resultado = mysqli_query($conexion,$reservas);
?> 
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

	<form id="enviarEmail" action="../llamadas/procesoRealizarConsulta.php" method="POST">
			<legend class="subtitulo">Escríbenos</legend>
			<p class="subtittle">Nuestro equipo de soporte estará gustoso de brindarte asistencia en lo que necesites.</p>
		<table>
			<tr>
				<td><label>Nombres:</label></td>
			</tr>
			<tr>
				<td><input type="text" id="nombres" name="nombre" class="nombre"><br></td>
			</tr>
			<tr>
				<td><label>Apellidos:</label></td>
			</tr>
			<tr>
				<td><input type="text" id="apellidos" name="apellido" class="apellido"><br></td>
			</tr>
			<tr>
				<td><label>DNI:</label></td>
			</tr>
			<tr>
				<td><input type="number" id="dni" name="dni" class="dni"><br></td>
			</tr>
			<tr>
				<td><label>Telefono:</label></td>
			</tr>
			<tr>
				<td><input type="text" id="telefono" name="telefono" class="telefono"><br></td>
			</tr>
			<tr>
				<td><label>Correo:</label></td>
			</tr>
			<tr>
				<td><input type="email" id="correo" name="correo" required><br></td>
			</tr>
			<tr>
				<td><label>Categoria del Producto:</label></td>
			</tr>
			<tr>
				<td><select id="categoria" name="categoria" class="categoria">
					<option value="" disabled selected>Seleccionar Categoria</option>
					<?php 
                        while($res = mysqli_fetch_array($resultado)) {
                    ?>
                        <option value="<?php echo $res['id_categoria']; ?>"><?php echo $res['nombre']; ?></option>
                    <?php
                        }
                    ?>
				</select></td>
			</tr>
			<tr>
				<td><label>Motivo:</label></td>
			</tr>
			<tr>
				<td>
					<div class="divRadio">
						<div>
							<input type="radio" name="motivo" value="Consulta de producto" id="consultaProducto" required>
							<span>Consulta de Producto</span>
						</div>
						<div>
							<input type="radio" name="motivo" value="Servicio Tecnico" id="servicioTecnico" required>
							<span>Servicio Tecnico</span>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td><label>Consulta:</label></td>
			</tr>
			<tr>
				<td><textarea name="asunto" id="mensaje" class="asunto"></textarea></td>
			</tr>
			<tr>
				<td>
					<input id="check1" type="checkbox" name="leer">Acepto los Terminos y condiciones<br>
					<input id="check2" type="checkbox" name="nadar">Acepto la compra Segura y Politicas de Privacidad<br>
				</td>
			</tr>
			<tr>
				<td id="bloque">

				</td>
			</tr>
			<tr>
				<td><input type="submit" id="enviar" name="registroData" value="ACEPTAR"></td>
			</tr>
		</table>
	</form>

	<?php
    	include('../includes/footerCliente.php');
	?> 
		
	<script src="../js/formulario.js"></script>
</body>
</html>