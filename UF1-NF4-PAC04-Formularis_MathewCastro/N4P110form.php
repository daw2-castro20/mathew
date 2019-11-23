<?php
$html= <<<ENDHTML
    <html>
     <head>
      <title>My Site</title>
     </head>
     <body>
      <form action="N4P112Form.php" method="post">
       <table>
        <tr>
         <td>Ciudad</td>
        <td><input type="text" name="city" /></td>
       </tr>  
       <tr>
         <td>Name of reviewer</td>
        <td><input type="text" name="name" /></td>
       </tr>
         <tr>
         <td>Comments</td>
         <td><textarea name="comentario" rows="5" cols="30"></textarea><br></td>
        </tr>
        <tr>
     <td>Lectores</td>
    <td><input type="number" name="populates" /></td>
   </tr>  
   <tr>
     <td>Veces leido</td>
    <td><input type="number" name="leido" /></td>
   </tr>
        <tr>
         <td>Ratting</td>
         <td>
         <select name="rating">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
         </select>
         </td>
        </tr>
        <tr>
         <td colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Enviar" /></td>
        </tr>
       </table>
      </form>
     </body>
    </html>
    
ENDHTML;
echo $html;
?>