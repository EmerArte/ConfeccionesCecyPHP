<?php
session_start();
$arreglo= $_SESSION['carrito'];
for($i=0; $i<count($arreglo); $i++){
    if($arreglo[$i]['Codigoc'] == $_POST['id']){
        $arreglo[$i]['Cantidad'] = $_POST['cantidad'];
        $_SESSION['carrito']=$arreglo;
    break;
    }
}
?>