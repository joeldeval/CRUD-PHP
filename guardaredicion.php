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
    margin-left: 10%;
  }
  fieldset{
    margin-left: 25%;
    width: 50%;
    color: grey;
  }
  #volver{
      font-size: 190%;
    margin-left: 44%;
    background-color: white;

    color: grey;
  }
  h2{
    color: grey;
  }
  label{
    color: #999999;
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
echo "<center>Datos Ingresados con exito</center>";
require_once('conexion.php');
$id=$_POST['txtID'];
$Nombre = $_POST['txtNombre'];
$AP = $_POST['txtAP'];
$AM = $_POST['txtAM'];
$Telefono = $_POST['txtTelefono'];
$DOmicilio = $_POST['txtDireccion'];
$CP = $_POST['txtCP'];

echo "<h2>NOMBRE:</h2> <label>".$Nombre."</label>";
echo "<h2>APELLIDO PATERNO:</h2> <label>".$AP."</label>";
echo "<h2>APELLIDO MATERNO:</h2> <label>".$AM."</label>";
echo "<h2>TEL&Eacute;FONO:</h2> <label>".$Telefono."</label>";
echo "<h2>DOMICILIO:</h2> <label>".$DOmicilio."</label>";
echo "<h2>CODIGO POSTAL:</h2> <label>".$CP."</label>";
try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "UPDATE Persona SET  Nombre='$Nombre', ApePaterno='$AP', ApeMaterno='$AM', Direccion='$DOmicilio', Telefono='$Telefono', CP='$CP' where idPersona=$id";
          $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
          echo $e;
        }
         echo "<br>";
           
          

?>


    
  <form method="post" action="Directorio.php">
      
<input id="volver" type="submit" value="Volver" /></br>
</form>
   <br/>
<br/>
</fieldset>
</body>


</html>