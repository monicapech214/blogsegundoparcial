
<?php

$campo_titulo=$_POST['campo_titulo'];
$creado_por=$_POST['creado_por'];
$area_comentarios = $_POST['area_comentarios'];
$imagen= $_POST['imagen'];

setcookie('campo_titulo',$campo_titulo,time()+604800);
setcookie('creado_por',$creado_por,time()+604800);
setcookie('area_comentarios',$area_comentarios,time()+604800);
setcookie('imagen',$imagen,time()+604800);

?>
