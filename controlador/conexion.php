<?php 

    // Conexion hacia la base de datos
    function conectar(){
        $conexion = mysqli_connect("localhost","root","","bdcomputers");
        return $conexion;
    }
    
    // ---- LOGIN USUARIO ----//
    // Funcion para validar el login del usuario
    function validarUsuario($usuario, $password, $conexion){
        $sql = "SELECT*FROM admi where usuario='$usuario' and password='$password'";
        $resultado = mysqli_query($conexion,$sql);
        $filas=mysqli_num_rows($resultado);
        return $filas;   
    }



    // ---- CONSULTAS - CLIENTES ---- //
    // Funcion para listar todos los clientes y sus datos
    function listarClientes($conexion){
        $sql="SELECT * FROM (`clientes`)";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }

    // Funcion para listar los datos del cliente mediante su id 
    function buscarCliente($id, $conexion){
        $sql = "SELECT * FROM clientes WHERE id='$id';";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }

    //Funcion para registrar datos del cliente
    function registrarCliente($dni,$nombre,$apellido,$correo,$telefono,$conexion){
        $sql = "INSERT INTO clientes VALUES (null,'$dni','$nombre','$apellido','$correo','$telefono')";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para actualizar datos del cliente
    function actualizarCliente($id,$dni,$nombre,$apellido,$correo,$telefono,$conexion){
        $sql="UPDATE clientes SET id_cliente = '$dni', nombre = '$nombre', apellidos = '$apellido', correo = '$correo', celular = '$telefono' WHERE id = '$id';";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para eliminar un cliente
    function eliminarCliente($id, $conexion){
        $sql="DELETE FROM clientes where id = '$id';";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para registrar los datos de la consulta
    function registrarConsulta($idcliente,$categoria,$motivo,$mensaje,$conexion){
        $sql = "INSERT INTO consulta VALUES (null,'$idcliente','$categoria','$motivo','$mensaje')";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para listar las consultas
    function listarConsultas($conexion){
        $sql="SELECT consulta.id_consulta, clientes.id_cliente, clientes.nombre, clientes.correo, categoria.nombre, consulta.motivo, consulta.asunto FROM (consulta JOIN clientes ON consulta.id_cliente = clientes.id) LEFT JOIN categoria ON consulta.id_categoria = categoria.id_categoria;";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }

    // Funcion para eliminar una consulta
    function eliminarConsulta($id, $conexion){
        $sql="DELETE consulta, clientes from consulta JOIN clientes ON consulta.id_cliente=clientes.id WHERE consulta.id_consulta='$id';";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }



    // ---- CATEGORIAS ----//
    // Funcion para registrar Categorias
    function registrarCategoria($nombreCategoria, $conexion){
        $sql="INSERT INTO categoria VALUES(null, '$nombreCategoria')";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para actializar una categoria
    function actualizarCategoria($id, $nombre, $conexion){
        $sql="UPDATE categoria set nombre='$nombre' WHERE id_categoria='$id'";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    //Funcion para eliminar Categorias
    function eliminarCategoria($codigo, $conexion){
        $sql="DELETE FROM categoria where id_categoria='$codigo'";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    //Funcion para listar categorias
    function listarCategorias($conexion){
        $sql = "SELECT * FROM (`categoria`)";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }

    // Funcion para listar los datos de la Categoria segun su ID
    function buscarCategoria($id, $conexion){
        $sql = "SELECT * FROM categoria WHERE id_categoria='$id'";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }



    // ---- PRODUCTOS ----//
    // Funcion para registrar de productos
    function registrarProducto($categoria, $marca, $descripcion, $precio, $imagen, $conexion){
        $sql="INSERT INTO productos VALUES (null,'$categoria','$marca','$descripcion','$precio','$imagen')";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para actualizar productos
    function actualizarProducto($codigo, $categoria, $marca, $descripcion, $precio, $imagen, $conexion){
        $sql="UPDATE productos set categoria='$categoria', marca='$marca', descripcion='$descripcion', precio='$precio', foto='$imagen' WHERE id_producto='$codigo'";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para eliminar un producto
    function eliminarProducto($idproducto, $conexion){
        $sql="DELETE FROM productos where id_producto='$idproducto'";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para buscar producto por ID
    function buscarProducto($idproducto, $conexion){
        $sql="SELECT * FROM productos WHERE id_producto='$idproducto'";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }

    // Funcion para listar productos
     function listarProductos($conexion){
        $sql="SELECT * FROM (`productos`)";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
     }

     function listarProductos2($conexion){
        $sql="SELECT productos.id_producto, categoria.nombre, productos.marca, productos.descripcion, productos.precio, productos.foto FROM(productos JOIN categoria ON productos.categoria = categoria.id_categoria);";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
     }

    // Function para listar productos por CATEGORIA
    function listarProductosCategoria($categoria, $conexion){
        $sql="SELECT id_producto,categoria, marca, descripcion, precio, foto FROM productos WHERE categoria='$categoria';";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }


    // --- LIBRO DE RECLAMACIONES ---- //
    // Funcion para registrar Libro de reclamaciones
    function registrarDataLibro($idcliente,$bien,$monto,$motivo,$descripcion,$conexion){
        $sql="INSERT INTO reclamos VALUES(null,'$idcliente','$bien','$monto','$motivo','$descripcion')";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }

    // Funcion para listar los datos del reclamo con la data del cliente
    function listarDataLibro($conexion){
        $sql="SELECT reclamos.id_reclamo, clientes.id_cliente, clientes.correo, reclamos.bien_contratado, reclamos.monto, reclamos.motivo, reclamos.descripcion FROM(reclamos JOIN clientes ON reclamos.id_cliente = clientes.id);";
        $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
        return $resultado;
    }

    // Funcion para eliminar data del reclamo
    function eliminarDataLibro($id,$conexion){
        $sql="DELETE reclamos, clientes FROM reclamos JOIN clientes ON reclamos.id_cliente = clientes.id WHERE reclamos.id_reclamo='$id';";
        mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    }
?>