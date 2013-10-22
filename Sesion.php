<?php
session_start();
if(isset($_SESSION['codigo'])){
header("Location: Directorio.php");
}
?>
<html lang="es">
  <head>
<title>Inicia Sesion</title>
<style type="text/css">
	fieldset{
		margin-left: 37%;
		width: 20%;
		margin-top: 20%;
	}
	[required]{
		border-color: transparent;
		box-shadow: 0px 0px 5px blue;
	}

	</style>
  </head>
  <body>
    
    <form method="post" action="Iniciar.php">
      <fieldset>
       <legend>LOGIN</legend>
<label for="txtCodigo" id="lblcodigo">C&oacute;digo </label><br/>
      <input type="text" name="txtCodigo" id="txtcodigo" size="20" maxlength="20" required/> 
      
<label for="txtPassword">Password</label><br/>
      <input type="password" name="txtPassword" id="pass" size="20" maxlength="20" required /> 

<input type="submit" name="btnenviar" value="Iniciar" required />
   </fieldset>
 </form>
  	
  </body>

</html>
