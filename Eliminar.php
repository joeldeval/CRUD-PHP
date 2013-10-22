<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ELIMINAR</title>
<style type="text/css">
    label{
         color: #999999;
    }
    #volver{
         font-size: 190%;
    margin-left: 44%;
    background-color: white;

    color: grey;
    }
      #cerrarsesion{
    margin-left: 2%;
    width: 20%;
    background-color: white;
    color: grey;
    margin-top: -8%;
    
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
 
    
<?php
if (isset($_GET['id'])) {
require_once("conexion.php");
$conexion = new Conexion();
$conexion->conectar();
$id=$_GET['id'];
$sql = "DELETE FROM Persona WHERE idPersona='".$id."'";
  $resultado = $conexion->mysqli->query($sql);
 $conexion->cerrar();
 echo "<center><Label>ELIMINADO CON &Eacute;XITO</Label></center>";
}
?>

<form method="post" action="Directorio.php">
<center>
<input id="volver" type="submit" value="Volver" /></br>
</center>
</form>

   <br/>
<br/>
</fieldset>
</body>


</html>
