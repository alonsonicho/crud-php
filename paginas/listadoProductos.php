<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/listadoProductos.css">
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

  <?php
      session_start();
      include('../controlador/conexion.php');
      $conexion = conectar();

      $listadoCategorias = listarCategorias($conexion);
      $vector=listarProductos($conexion);
      if(isset($_REQUEST['categoria'])){
        $codTipo = $_REQUEST['categoria'];
        if($_REQUEST['categoria']==='todos')
          $vector=listarProductos($conexion);
        else
          $vector=listarProductosCategoria($codTipo, $conexion);
      }
  ?> 

    <?php 
    // Contador cantidad carrito, verifica que la sesion exista
      $cantidad=0;
      if(isset($_SESSION['carrito'])){
        foreach ($_SESSION['carrito'] as $key => $value){
          $cantidad = $value['cantidad'] + $cantidad;
        }
      }
    ?>

    <div class="divCarritooo">
      <a href="carrito.php">
        <img src="../imagenes/carrito.png" width="100" class="carrito">
      </a>
      <span class="contador"><?php echo $cantidad; ?></span>
    </div>

    <section class="sectionProducto">
      <form action="./listadoProductos.php" method="POST">
        <select name="categoria" onchange="this.form.submit()" class="form-select">
            <option disabled selected>Seleccionar Categoria</option>
            <option value="todos">TODOS</option>
        <?php 
            while($res = mysqli_fetch_array($listadoCategorias)) {
            ?>
                <option value="<?php echo $res['id_categoria']; ?>"><?php echo $res['nombre']; ?></option>
            <?php
              }
            ?>
        </select>
      </form>
        

        <?php 
            while($res = mysqli_fetch_array($vector)) { 		
        ?>
            <div class="card-imagen">
                <img src="../imagenes/<?php echo $res['foto']; ?>">
                <h3><?php echo $res['marca']; ?></h3>
                <p><?php echo $res['descripcion']; ?></p>
                <p>$<?php echo $res['precio']; ?></p>

                <form action="./listadoProductos.php" method="POST">
                  <input type="hidden" name="idproducto" value="<?php echo $res['id_producto']; ?>">
                  <input type="hidden" name="categoria" value="<?php echo $res['categoria']; ?>">
                  <input type="hidden" name="marca" value="<?php echo $res['marca']; ?>">
                  <input type="hidden" name="descripcion" value="<?php echo $res['descripcion']; ?>">
                  <input type="hidden" name="precio" value="<?php echo $res['precio']; ?>">
                  <input type="hidden" name="foto" value="<?php echo $res['foto']; ?>">
                  <!-- <input type="text" name="cantidad" value=""> -->
                  <select id="form-selected" name="cantidad">
                    <option disabled selected>Selecciona cantidad :</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <input type="submit" name="agregar" value="agregar">
                </form>
            </div>     
        <?php
          }
        ?>
    </section>

    <?php
          if(isset($_REQUEST['agregar'])){
            $idproducto = $_REQUEST['idproducto'];
            $categoria = $_REQUEST['categoria'];
            $marca = $_REQUEST['marca'];
            $descripcion = $_REQUEST['descripcion'];
            $precio = $_REQUEST['precio'];
            $foto = $_REQUEST['foto'];
            $cantidad = $_REQUEST['cantidad'];

            // $_SESSION['carrito'][$idproducto]['id_producto']=$idproducto;
            // $_SESSION['carrito'][$idproducto]['categoria']=$categoria;
            $_SESSION['carrito'][$idproducto]['marca']=$marca;
            $_SESSION['carrito'][$idproducto]['descripcion']=$descripcion;
            $_SESSION['carrito'][$idproducto]['precio']=$precio;
            $_SESSION['carrito'][$idproducto]['foto']=$foto;

            if(isset($_SESSION['carrito'][$idproducto])){
              $_SESSION['carrito'][$idproducto]['cantidad']+= $cantidad;
            }else{
              $_SESSION['carrito'][$idproducto]['cantidad']=$cantidad;
            }
          }

    	include('../includes/footerCliente.php');
	  ?>
</body>
</html>