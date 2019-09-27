<html>
 <head>
  <title>Formulario</title>
 </head>
 <body>
  <form method="post" action="final.php">
   <p>Pon tu usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Pon tu libro preferido: 
    <input type="text" name="name"/>
   </p>
   <p>
   <p>Pon tu id: 
    <input type="text" name="id"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit" />
   </p>
  </form>
 </body>
</html>

<?php

setcookie("name","La Odisea", time() + 5076000);

$myfavbook = urlencode("Dracula");
echo "<a href='final.php?favbook=$myfavbook'>";
echo "Click here to see information about my favorite book!"; 
echo "</a>";

date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
?>
