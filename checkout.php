<?php
if(isset($_POST['submit'])){
  
  $nombre= $_POST['nombre'];
  $apellido= $_POST['APELLIDO'];
  $correo= $_POST['correo'];
  $direccion= $_POST['direccion'];
  $telefono= $_POST['telefono'];
  $contraseña= $_POST['password'];
}
session_start();
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ventas &mdash; </title>
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
      <form action="registrarUsuario.php" method="post">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              ¿Ya tienes cuenta? <a href="login.php">Click aquí</a> para Ingresar
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles de compra</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group row formulario">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" title="Este campo es obligatorio!" id="c_fname" name="nombre" required>
                </div>
                <div class="col-md-6 formulario">
                  <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" title="Este campo es obligatorio!" id="c_lname" name="APELLIDO" required>
                </div>
              </div>

              <div class="form-group row formulario">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" title="Este campo es obligatorio!" id="c_address" name="direccion" placeholder="Ingresa tu dirección"required>
                </div>
              </div>
              <div class="form-group row mb-5 formulario">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">E-mail <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" title="Este campo es obligatorio!" id="c_email_address" name="correo">
                </div>
                <div class="col-md-6 formulario">
                  <label for="c_phone" class="text-black">Número de telefono<span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" title="Digite un número valido!" id="c_phone" name="telefono" placeholder="telefono" required>
                </div>
              </div>

              <div class="form-group formulario">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Crear cuenta?</label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Cree una cuenta ingresando la información a continuación. Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Contraseña</label>
                      <input type="password" pattern="^@?(\w){1,16}$" class="form-control" id="c_account_password" name="contraseña" placeholder=""  required>
                    </div>
                  </div>
                  <button type= "submit" class="btn btn-primary btn-lg py-3 btn-block btnregistrar" >Registrarse</button>
                </div>
              </div>
              </from>

              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Enviar a una direccion diferente?</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname" require>
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname" require>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" require>
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_diff_email_address" class="text-black">E-mail <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address" require>
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_phone" class="text-black">Numero de telefono <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Número de telefono" require>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Tú Orden</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe algunas notas aqui..."></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Codigo de descuento</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Ingrese un cupon de descuento si tiene uno.</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Aplicar</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Su pedido</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    <?php
                    $total=0;
                      for($i=0; $i<count($arreglo); $i++){
                        $total =$total+ ($arreglo[$i]['Precio']* $arreglo[$i]['Cantidad']);
                    ?>
                      <tr>
                        <td><?php echo $arreglo[$i]['Nombre'];?><strong class="mx-2">x</strong> 1</td>
                        <td><?php echo $arreglo[$i]['Precio'];?></td>
                      </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td>Total a Pagar<strong class="mx-2"></strong></td>
                        <td>$<?php echo $total?></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'">Realizar Pedido</button>
                  </div>

                </div>
              </div>
            </div> 
          </div>
        </div>
        </form>
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