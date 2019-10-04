<html>
 <head>
  <title>How many days in this month?</title>
 </head>
 <body>
 <h1>Formulario</h1>
 <style>
     .correo{
       text-align:center;
       margin-top: 500px;
      }
 </style>
  <form method="post" action="page2.php">
   <textarea name="texto" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
   <label for="text">Elige un color:</label>
  <input type="color" name="color" value="#ff0000">

   <label for="text"> Elige una fuente:</label>
   <select name="font">
       <option value="arial">Arial</option>
        <option value="verdana">Verdana</option>
         <option value="times New Roman">Times New Roman</option>
</select>
   
  <label for="text"> Elige el tamaño: </label>
  <select name="size">
   <option value="10">10</option>
    <option value="15">15</option>
     <option value="20">20</option> 
   </select>
    <input type="submit" name="submit" value="Submit" />
   <label><input type="checkbox" id="cbox1" value="first_checkbox">Quieres guardar los datos introducidos</label><br>
  </form>

<?php
date_default_timezone_set('utc');
$date = date( "Y-m-d");
$date = date("Y-m-d");
$ayer = date( "d", strtotime( "-1 day", strtotime( $date ) ) );
$mesant = date( "m", strtotime( "-1 month", strtotime( $date ) ) );
$dia = date("d");
$mes = date("m");
$cont;


echo "Yesterday it was   " . $ayer."<br>";

echo "The previous month is   " . $mesant."<br>";

$month = date('m');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { $diares = 30 - $dia; $mesres = 12 - $mes;}
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }

echo "There are  " . $diares . "\n days left in the month <br>";

echo "There are  " . $mesres. "\n months left in the current year <br>";



$mesact = ('m') ;
if ($month ==  1) { echo 'Good winter'; }
if ($month ==  2) { echo 'Good winter)'; }
if ($month ==  3) { echo 'Good winter'; }
if ($month ==  4) { echo 'Good winter'; }
if ($month ==  5) { echo 'Good summer'; }
if ($month ==  6) { echo 'Good summer'; }
if ($month ==  7) { echo 'Good summer'; }
if ($month ==  8) { echo 'Good summer'; }
if ($month ==  9) { echo 'Good summer' ; }
if ($month == 10) { echo 'Good winter <br>'; }
if ($month == 11) { echo 'Good winter'; }
if ($month == 12) { echo 'Good winter'; }


echo "El color escogido es: " .$_COOKIE["color"]."<br>";
echo "La fuente escogida es: " .$_COOKIE["font"]."<br>";
echo "El tamaño escogido es: " .$_COOKIE["size"]."<br>";



?>

  
 </body>
    
        <div class="correo">
          <p>Site developed by:  </p>
            <a href="mailto:mathew1999castrorojas@gmail.com?body=Hola!">Mathew1999castrorojas@gmail.com</a>
        </div>
    
</html>




