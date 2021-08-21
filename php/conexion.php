<?php 
$db_host="localhost"; 
$db_usuario="root"; 
$db_password=""; 
$db_nombre="carrito"; 
$conexiones = new mysqli($db_host,$db_usuario,$db_password, $db_nombre);
if($conexiones -> connect_error){
    die("No Se Pudo Conectar");
}
?> 
