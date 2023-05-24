<?php
    // if(empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["dni"]) || empty($_POST["telefono"]) || empty($_POST["correo"]) || empty($_POST["categoria"]) || empty($_POST["asunto"])){
    //     header('Location: ../registro.php');
    //     exit();
    // }

    // include_once './db.php';
    // $nombre = $_POST["nombre"];
    // $apellido = $_POST["apellido"];
    // $dni = $_POST["dni"];
    // $telefono = $_POST["telefono"];
    // $correo = $_POST["correo"];
    // $categoria = $_POST["categoria"];
    // $motivo = $_POST["motivo"];
    // $mensaje = $_POST["asunto"];
    
    
    // $verificar_id = mysqli_query($conexion, "SELECT * FROM cliente WHERE id_cliente='$dni'");
	// if(mysqli_num_rows($verificar_id) > 0){ 				
	// 	echo '<script> alert("OCURRIO UN ERROR, YA HAY UNA CONSULTA EN PROCESO CON SU DNI");
	// 		window.location = "../registro.php";
	// 		</script>';
	// 	exit();
	// }
    
    // $sentencia = $conexion->prepare("INSERT INTO cliente(id_cliente,nombre,apellidos,correo,celular) VALUES (?,?,?,?,?);");
    // $resultado = $sentencia->execute([$dni,$nombre,$apellido,$correo,$telefono]);

    // $sentencia2 = $conexion->prepare("INSERT INTO consulta(id_cliente,id_area,motivo,asunto) VALUES (?,?,?,?);");
    // $resultado2 = $sentencia2->execute([$dni,$categoria,$motivo,$mensaje]);

    // if($resultado === TRUE && $resultado2 === TRUE) {
    //     header('Location: ../registro.php');
    // } else {
    //     header('Location: ../registro.php');
    //     exit();
    // }
?>