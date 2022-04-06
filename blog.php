<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Creación de Blog</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<h2>Crear blog </h2>
<form action="Contenido.php" method="post" name="form1">
<h2> Título: <h2>
    <label for="campo_titulo"></label>
 <input type="text" name="campo_titulo" id="campo_titulo" placeholder="Agrega titulo a tu blog">
 <h2> Creado por: <h2>
    <label for="creado_por"></label>
 <input type="text" name="creado_por" id="campo_titulo" placeholder="Agrega tu nombre">
 <h2> Área de Texto: </h2>
    <label for="area_comentarios"></label>
    <textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50" placeholder = "Agregar descripción"></textarea>
  <h2><input type="file" name="imagen" id="imagen" id="imagen"><h2>
  <h2>  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btn_enviar" id="btn_enviar">Crear nuevo</button></h2>
 <div>
   <br>
   <br>
    <h2><a href="Mostrar.php">Ver blog ya agregado</a><h2>
    </div>
</form>
</body>
</html>