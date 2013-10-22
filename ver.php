<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>

<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
  #lblusu{
    margin-left: 35%;
  }
   #cerrarsesion{
    margin-left: 2%;
    width: 20%;
    background-color: white;
    color: grey;
    margin-top: -8%;
    
  }
  fieldset{
    margin-left: 25%;
    width: 50%;
    color: grey;
  }
  h2{
    color: grey;
  }
  label{
    color: #999999;
  }
   #volver{
      font-size: 190%;
    margin-left: 44%;
    background-color: white;

    color: grey;
  }

  </style>
  </head>

  <body>
 
<?php
echo "<form method='post' action='Cerrar.php'>
<label id=lblusu>USUARIO: ".$_SESSION['codigo']."</label>
<input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
</form>";
?>

<fieldset>
<legend>DATOS</legend>
    
 
<?php
if (isset($_GET['id'])) {
	require_once("conexion.php");
	$conexion=new Conexion();
	$conexion->conectar();
	$id = $_GET['id'];
  	$sql = "SELECT * FROM Persona WHERE idPersona='".$id."'";
    $resultado = $conexion->mysqli->query($sql);
    $registro = $resultado->fetch_assoc();
    $conexion->cerrar();
	echo "<h2>NOMBRE:</h2> <label>".$registro['Nombre']."</label>";
    echo "<h2>APELLIDO PATERNO:</h2> <label>".$registro['ApePaterno']."</label>";
    echo "<h2>APELLIDO MATERNO:</h2> <label>".$registro['ApeMaterno']."</label>";
    echo "<h2>TEL&Eacute;FONO:</h2> <label>".$registro['Telefono']."</label>";
    echo "<h2>DOMICILIO:</h2> <label>".$registro['Direccion']."</label>";
    echo "<h2>CODIGO POSTAL:</h2> <label>".$registro['CP']."</label>";
}
?>

   <br/>
<br/>
 <form method="post" action="Directorio.php">
      
<input id="volver" type="submit" value="Volver" /></br>
</form>
<br/>
</fieldset>
</body>


</html>
