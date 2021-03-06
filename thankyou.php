<?php
session_start();
include './php/conexion.php';
if(!isset($_SESSION['carrito'])){header("Location: ./index.php");}
$arreglo= $_SESSION['carrito'];
$total=0;
for($i=0; $i<count($arreglo); $i++){
  $total = $total+$arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'];

}
$idusuario= $conexiones  ->query("select * from usuario id")or die($conexiones -> error);
$fecha = date("y-m-d h:m:s");
$conexiones -> query("insert into VENTAS (id_usuario, total, fecha) values(1,'$total','$fecha')")or die($conexiones->error);
$id_venta=$conexiones->insert_id;
for($i=0; $i<count($arreglo); $i++){
  $conexiones -> query("insert into PRODUCTOS_VENTA (id_venta,id_producto,cantidad, precio, subtotal) 
  values($id_venta, ".$arreglo[$i]['Codigoc'].",
  ".$arreglo[$i]['Cantidad'].",
  ".$arreglo[$i]['Precio'].",
  ".$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'].")")or die($conexiones->error);
}
unset($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
   <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Muchas Gracias!</h2>
            <p class="lead mb-5">Tu pedido ha sido completado con exito</p>
            <p><a href="index.php" class="btn btn-sm btn-primary">Volver a la tienda</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>