<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Importaciones Tecnologicas - Iniciar Sesión</title>
	<link rel="shortcut icon" href="../imagen/logo.png">
	<link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/loginAdmi.css">
</head>
<font face="Arial" color="#FFFFFF">
<body style="background:#009640">
	  <div id="divAdmi">
		<form id="formularioAdmiLogin" action="../llamadas/procesoLogin.php" method="POST">
			<img id="logoAdmi" src="../imagenes/logo.png" alt="logo">
			<h2 class="tittle-admi">Iniciar Sesion</h2>
			<label>Nombre Usuario:</label>
			<input type="text" name="usuario" id="usuario"><br>
			<td><label>Password:</label>
			<input type="password" name="password" id="password"><br></td>
			<button type="submit" >INGRESAR</button>
		</form>
	  </div>
	  <script src="../js/formularioAdmiLogin.js"></script>
</body>
</html>