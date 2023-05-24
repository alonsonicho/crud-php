<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/carrito.css">
</head>
<body>
    <header>
		<h2 class="titulo-index">IMPORTACIONES TECNOLOGICAS PC-COMPUTERS</h2>
        <nav>
            <ul><a href="registro.php">Consultas</a></ul>
            <ul><a href="../index.php">Nosotros</a></ul>
            <ul><a href="../index.php">Ofrecemos</a></ul>
            <ul><a href="../paginas/listadoProductos.php">Productos</a></ul>
            <ul><a href="registro.php">Contáctanos</a></ul>
        </nav>
	</header>

    <section>
    <?php
        session_start();
    	if(isset($_SESSION['carrito'])){
        ?>
            <table class="tabla-carrito">
                <thead>
                    <tr>
                        <th scope="col">ID Producto</th>
                        <!-- <th scope="col">Categoria</th> -->
                        <th scope="col">Marca</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
                <tbody>
        <?php    
            $total = 0;
            foreach ($_SESSION['carrito'] as $key => $value) {
                echo "<tr> <td>$key</td>";
                foreach ($value as $nombre => $valor) {
                    if($nombre==='foto')
                        echo "<td><img src='../imagenes/$valor' width='120' height='100'></td>";
                    else
                        echo "<td> $valor </td>"; 
                }
                $subtotal = $value['cantidad'] * $value['precio'];
                $total = $total + $subtotal;
                echo "<td> $$subtotal </td>";
                echo "<td><a href='carrito.php?codigoproducto=$key'><img src='../imagenes/delete.png' width=40''></a></td>";
            }
            echo "<tr class='tr-eliminar'> <td colspan='6'>TOTAL :</td> <td> $$total </td> <td> <a href='carrito.php?eliminar=true'>ELIMINAR TODO</a></td>";
        }
            ?>
                </tbody>
            </table>
        <?php 
            if(isset($_REQUEST['eliminar'])){
                session_destroy();
                header("location: carrito.php");
            }

            if(isset($_REQUEST['codigoproducto'])){
                $codi= $_REQUEST['codigoproducto'];
                unset($_SESSION['carrito'][$codi]);
                header("location: carrito.php");
            }
	    ?>
    </section>
    
    <?php
    	include('../includes/footerCliente.php');
	?>

</body>
</html>
