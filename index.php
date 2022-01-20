<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
if(!empty($_POST['nombre'])){
$_SESSION['nombre'] = $_POST['nombre'];
echo "Sesion creada:<b> ".$_SESSION['nombre'] ."</b>";
}else{
  echo "no existe ninguna sesion";
}
?>
<h2>Creando la sesion</h2>
<form action="index.php" method="POST">
<p>Nombres:</p>
<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required/></p>
<p><input type="submit" value="Crear Sesion" /></p>
</form>

</body>
</html>