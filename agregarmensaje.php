<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Contacto &mdash; Cecy SHOP</title>
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
<?php
include ("./php/conexion.php");
  $sql="insert into mensaje values('".$_POST['c_email']."','".$_POST['c_fname']."','".$_POST['c_lname']."','".$_POST['c_subject']."','".$_POST['c_message']."')";
  $result = mysqli_query($conexiones, $sql);
  if(!$result){
        ?>
            <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Error Mensaje no enviado</h2>
            </div>

        <?php
  }else{
    ?>
            <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Mensaje enviado exitosamente</h2>
            </div>
<?php
}
include ("./php/desconexion.php");
?>
            <form action="./contact.php" method="get">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Volver">
            </form>
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