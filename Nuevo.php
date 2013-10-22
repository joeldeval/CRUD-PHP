<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>
<html>
  <head>
<title>Nuevo</title>

  <style type="text/css">
  #lblusu{
    margin-left: 45%;
  }
      #volver{
    
    background-color: white;

    color: grey;
    }
  #cerrarsesion{
    margin-left: 3%;
    background-color: white;
    color: grey;
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

<fieldset>
  <legend>NUEVO CONTACTO</legend><br/><br/>

  <form method="post" action="Ver.php">
  <label for="txtNombre" id="lblNombre">NOMBRE</label><br/>
  <input type="text" id="txtNombre" name="txtNombre" value="" required ><br/><br/>

  <label for="txtAP" id="lblAP">APELLIDO PATERNO</label><br/>
  <input type="text" id="txtAP" name="txtAP" value="" required ><br/><br/>

    <label for="txtAM" id="lblAM">APELLIDO MATERNO</label><br/>
  <input type="text" id="txtAM" name="txtAM" value="" required ><br/><br/>

  <label for="txtDireccion" id="lblDomicilio">DOMICILIO</label><br/>
  <input type="text" id="txtDireccion" name="txtDireccion" value="" required><br/><br/>

  <label for="txtTelefono" id="lblTelefono">T&Eacute;LEFONO</label><br/>
  <input type="text" id="txtTelefono" name="txtTelefono" value="" required><br/><br/>


    <label for="txtCP" id="lblCP">C&Oacute;DIGO POSTAL</label><br/>
  <input type="text" id="txtCP" name="txtCP" maxlength="5" value="" required><br/><br/><br/>

  <input type="submit" id="guardar" name="guardar" value="Guardar">
    
  </form>
  <form method="post" action="Directorio.php">
    <input type="submit" id="volver" name="guardar" value="Volver">
  </form>
  </fieldset>
</body>
</html>