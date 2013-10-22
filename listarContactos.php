<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
table{
    margin-left: 8%;
    margin-top: 2%;
    border-collapse:separate;
border-spacing:15px 10px;
}
th{


}
td{
  
    color: #777;
}

</style>
</head>
<body>
<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
        echo '<tr>';
        echo '<th id="ID">ID  </th>';
    echo '<th id="Nombre">  Nombre</th>';
    echo '<th id="AP">  Apellido Paterno</th>';
    echo '<th id="AM">  Apellido Materno</th>';
    echo '<th id="Direccion">  Direcci&oacute;n</th>';
        echo '<th id="Telefono">  TELEFONO</th>';
    echo '<th  id="CP">  CP</th>';
    echo '<th id="Op">  OPCIONES</th>';
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td align="center">'.$contacto['idPersona']. '</td>';
                    echo '<td align="center">'.$contacto['Nombre'].'</td>';
                    echo '<td align="center">'.$contacto['ApePaterno'].'</td>';
                    echo '<td align="center">'.$contacto['ApeMaterno'].'</td>';
                    echo '<td align="center">'.$contacto['Direccion'].'</td>';
                    echo '<td align="center">'.$contacto['Telefono'].'</td>';
                    echo '<td align="center">'.$contacto['CP'].'</td>';   
                   
                    echo '<td align="center">
                  <a href="Eliminar.php?id='.$contacto['idPersona'].'"><img src="eliminar.png"></a>
                   <a href="Editar.php?id='.$contacto['idPersona'].'&nombre='.$contacto['Nombre'].'&ap='.$contacto['ApePaterno'].'&am='.$contacto['ApeMaterno'].'&Tel='.$contacto['Telefono'].'&Dir='.$contacto['Direccion'].'&cp='.$contacto['CP'].'"><img src="editar.png"></a>
                   <a href="ver.php?id='.$contacto['idPersona'].'"><img src="ver.png"></a>
                  </td>';
                           
                 
                echo '</tr>';
            }
        echo '<table>';
    }
} 
?>

</body>
</html>
