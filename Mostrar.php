<!DOCTYPE >
<html>
<head>
<title>Ver datos guardados:</title> 
</head>
<body>
<link href="style.css" rel="stylesheet"/>

<?php


$_titulo=$_COOKIE['campo_titulo'];
$_por=$_COOKIE['creado_por'];
$_comentarios = $_COOKIE['area_comentarios'];
$_imagen= $_COOKIE['imagen'];

?>

<h2> <?php echo ' '.$_titulo.'<br/>'; ?>  </h2> 
<h3> <?php echo 'Sitio creado por: ' .$_por. '<br/>'; ?>  </h3> 
<h2> <?php echo ' '.$_comentarios.'<br/>'; ?>  </h2> 
<h2> <?php echo "<img src='imagenes/". $_imagen . "'width='200px' />"; ?>  </h2> 
<a href="blog.php">Volver</a><h2>

</body>
</html>