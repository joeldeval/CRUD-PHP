<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>EDITAR</title>
<style type="text/css">
    label{
         color: #999999;
    }
    #volver{
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
   #lblusu{
    margin-left: 45%;
  }
  #guardar{
    background-color: white;
    color: grey;
  }
  fieldset{
  margin-left: 25%;
  width: 50%;
}

  [required]{
    border-color: white;
    box-shadow: 0px 0px 5px green;
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


<?php


if (isset($_GET['id'])) {
require_once("conexion.php");
$conexion = new Conexion();
$conexion->conectar();

$id=$_GET['id'];

$Nombre=$_GET['nombre'];
$APATERNO=$_GET['ap'];
$AMATERNO=$_GET['am'];
$TELEFONO=$_GET['Tel'];
$DIRECCION=$_GET['Dir'];
$CODIGOPOSTAL=$_GET['cp'];
 echo "<fieldset>
  <legend>EDITAR</legend><br/><br/>

  <form method='post' action='guardaredicion.php'>
  <label for='txtNombre' id='lblNombre'>ID</label><br/>
  <input type='text' title='NO PUEDES EDITARLO' id='txtNombre' name='txtID' readonly='readonly' value=".$id." required ><br/><br/>

  <label for='txtNombre' id='lblNombre'>NOMBRE</label><br/>
  <input type='text' id='txtNombre' name='txtNombre' value=".$Nombre." required ><br/><br/>

  <label for='txtAP' id='lblAP'>APELLIDO PATERNO</label><br/>
  <input type='text' id='txtAP' name='txtAP' value=".$APATERNO." required ><br/><br/>

    <label for='txtAM' id='lblAM'>APELLIDO MATERNO</label><br/>
  <input type='text' id='txtAM' name='txtAM' value=".$AMATERNO." required ><br/><br/>

  <label for='txtDireccion' id='lblDomicilio'>DOMICILIO</label><br/>
  <input type='text' id='txtDireccion' name='txtDireccion' value=".$DIRECCION." required><br/><br/>

  <label for='txtTelefono' id='lblTelefono'>T&Eacute;LEFONO</label><br/>
  <input type='text' id='txtTelefono' name='txtTelefono' value=".$TELEFONO." required><br/><br/>


    <label for='txtCP' id='lblCP'>C&Oacute;DIGO POSTAL</label><br/>
  <input type='text' id='txtCP' name='txtCP' maxlength='5' value=".$CODIGOPOSTAL." required><br/><br/><br/>

  <input type='submit' id='guardar' name='guardar' value='Guardar'>
    
  </form>
  <form method='post' action='Directorio.php'>
    <input type='submit' id='volver' name='guardar' value='Volver'>
  </form>
  </fieldset>";

          
}
?>


</body>


</html>
