<?php
    include('../controlador/conexion.php');
    $conexion = conectar();

    // Verifica primero con isset si el formulario se ha enviado, si no estamos enviando ningun valor por POST , osea nuestro formulario entonces no se ejecutara el if 
    if(isset($_POST['registro'])){
        // Empty verifica si nuestra variable se encuentra vacia, devuelve TRUE si no tiene ningun valor, ponemos !empty para que se ejecute si es diferente a una data vacia. 
        if(!empty($_POST['categoria']) && !empty($_POST['marca']) && !empty($_POST['descripcion']) && !empty($_POST['precio']) && !empty($_POST['imagen'])){
            // Capturamos y asignamos a las variables los datos que enviamos desde el formulario
            $categoria = $_POST["categoria"];
            $marca = $_POST["marca"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];

            // Ejecutamos la funcion para registrar y le pasamos los parametros correspondientes
            registrarProducto($categoria, $marca, $descripcion, $precio, $imagen, $conexion);
            // Una vez finalizada la funcion de registro, el header nos redirecciona 
            header('location: ../paginas/paginasAdmi/listadoProductos.php');
        }else{
            // Si encuentra al menos un campo vacio al enviar el formulario redireccion hacia la pagina registro y no se almacena el registro
            header('location: ../paginas/paginasAdmi/registroProducto.php');
        }
    }

?> 