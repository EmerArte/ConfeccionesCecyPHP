<?php
session_start();
$arreglo = $_SESSION['carrito'];
for($i=0; $i<count($arreglo); $i++){
  if($arreglo[$i]['Codigoc'] != $_POST['id']){
    $arreglo2[]=array(
        'Codigoc'=>$arreglo[$i]['Codigoc'],
        'Nombre'=>$arreglo[$i]['Nombre'],
        'Precio'=>$arreglo[$i]['Precio'],
        'Imagen'=>$arreglo[$i]['Imagen'],
        'Cantidad'=>$arreglo[$i]['Cantidad']
    );  
  }  
}
if(isset($arreglo2)){
    $_SESSION['carrito']=$arreglo2;
}else{
    //Solo existe un elemento en el carrito
    unset($_SESSION['carrito']);
}
echo "Listo";
?>