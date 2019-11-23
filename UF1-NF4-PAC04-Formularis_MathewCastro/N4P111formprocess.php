<?php

$fecha=$_POST['city'];
$nombre=$_POST['name'];
$coment=$_POST['comentario'];
$rating=$_POST['rating'];
$lectores=$_POST['populates'];
$leido=$_POST['leido'];
$tabla="";
$tabla.='<title>Selecciona valores recibidos por post</title>';
$tabla.='<input type="hidden" name="nombre" value="Submit" />';
$tabla.='<input type="hidden" name="coment" value="Submit" />';
$tabla.='<input type="hidden" name="rating" value="Submit" />';
$tabla.='<input type="hidden" name="lectores" value="Submit" />';
$tabla.='<input type="hidden" name="leido" value="Submit" />';

$tabla.="<select name='selector'>";
$tabla.='<option value="'.$fecha.'">'.$fecha.'</option>';
$tabla.='<option value="'.$nombre.'">'.$nombre.'</option>';
$tabla.='<option value="'.$coment.'">'.$coment.'</option>';
$tabla.='<option value="'.$rating.'">'.$rating.'</option>';
$tabla.='<option value="'.$lectores.'">'.$lectores.'</option>';
$tabla.='<option value="'.$leido.'">'.$leido.'</option>';
$tabla.='</select><td>    
    <input type="submit" name="submit" value="Enviar"/>
    </td>';
$tabla.='</form></table>';

echo($tabla);


?>
</form></table>
 </body>
</html>
