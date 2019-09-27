<?php
session_start();
$_POST["user"];
$_POST["name"];
$_POST["id"];
$_SESSION ['user'];
$_SESSION ['name'];
$_SESSION ['id']=1;

//Check user permission
if ($_SESSION['id'] == 0){
    echo "Lo siento, pero no puedes entrar en mi pagina!";
    exit();     
}
?>
<html>
 <head>
  <title>My personal Site </title>
 </head>
 <body>


<?php

if($_GET["favbook"]){
    echo "El libro mejor adaptado es "; 
    echo $_GET['favbook'];
    echo "! <br/>";
}else{
    
    echo "Welcome to our site, ";
    echo $_POST["user"];
    echo "! <br/>";
    
    echo "Tu libro preferido: ";
    echo $_POST["name"];
    echo "! <br/>";
    
    echo "Tu id: ";
    echo $_POST["id"];
    echo "! <br/>";
}




echo $_COOKIE["name"];
echo "! <br/>";

date_default_timezone_set("America/New_York");
$leapyear = date("L");
if ($leapyear == 1) {
echo " Bien! Es año bisiesto! ";
}
else {
echo " Pues nada. Este año no es bisiesto. ";
}
?>


 </body>
</html>
