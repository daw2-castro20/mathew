<?php
session_start();
if(isset($_POST['color'])){
    $color = $_POST['color'];
    $tipografia = $_POST['font'];
    $size = $_POST['size'];
    $texto = $_POST['texto'];
     $_POST["cont"];
  $_SESSION ['cont'];
  $mensaje;
   
    $style="color:".$color.";font-family:".$tipografia.";font-size:".$size;
    echo $style;
     $_SESSION['contador'] = $_SESSION['contador'] + 1; 
    $mensaje = 'Número de visitas: ' . $_SESSION['contador'];
      echo "<br>".$mensaje."<br>";
}else{
    echo "error";
}

   
// Sí no está presente, la creamos:
setcookie("color",$_POST["color"], time() + 3600);
setcookie("font",$_POST["font"], time() + 3600);
setcookie("size",$_POST["size"], time() + 3600);

?>

<html>
<head>
    <title>Estructuras y bucles</title>
</head>
<body>
<div style="<?php echo $style ?>">
    <?php echo "<br>".$texto."<br>"?>


<?php 



?>

</div>
</body>

</html>