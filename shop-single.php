<?php
include("./php/conexion.php");
if(isset($_GET['id'])){
  $resultado = $conexiones ->query("select * from producto where CODIGOP=".$_GET['id'])or die($conexiones->error);
  if(mysqli_num_rows($resultado) > 0 ) {  
   $f=mysqli_fetch_row($resultado);
  }else{
    header("Location: ./index.php");
  }
}else{
  header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Cecy Shop</title>
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
          <div class="col-md-6">
            <img src="images/<?php echo $f[4]?>" alt="<?php echo $f[1]?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $f[1]?></h2>
            <p><?php echo $f[2]?></p>
            <p class="mb-4"><?php echo $f[8]?></p>
            <p><strong class="text-primary h4"><?php echo $f[3]?></strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">S</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">M</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">L</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black">XL</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.php?id=<?php echo $f[0]?>" class="buy-now btn btn-sm btn-primary">Añadir al Carrito</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Otros productos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
              <?php
        include './php/conexion.php';
      $re= $conexiones ->query("select * from producto")or die($conexiones -> error);
      while ($f=mysqli_fetch_array($re)){
            ?>
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/<?php echo $f['ImagenLocalizacion'];?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $f['CODIGOP'];?>"><?php echo $f['nombre'];?></a></h3>
                    <p class="mb-0"><?php echo $f['descripcion'];?></p>
                    <p class="text-primary font-weight-bold">$<?php echo $f['precio'];?></p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>  
            </div>
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