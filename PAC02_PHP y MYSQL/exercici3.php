<?php
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'books') or die(mysqli_error($db));
$noRegistros = 2; 
$pagina = 1; 
if($_GET['pagina']){
    $pagina = $_GET['pagina']; 
$buskr=$_GET['searchs']; 
}

$sSQL = "SELECT * FROM books WHERE book_name LIKE '%a%' LIMIT ".($pagina-1)*$noRegistros.",$noRegistros";
$result = mysqli_query($db,$sSQL) or die(mysqli_error($db));
	
//Exploracion de registros
echo "<table>";
while($row = mysqli_fetch_array($result)) { 
	echo "<tr><td height=80 align=center>";
	echo $row["book_id"]."<br>";
	echo "</td>
	<td align=center><img src='fotos/$row[book_id]' width=70 height=70></td>
		<td>$row[book_name].</td>
		<td align=center>$row[book_year].</td>
	</tr>";
}

//Imprimiendo paginacion
$sSQL = "SELECT count(*) FROM books WHERE book_name LIKE '%a%'";
$result = mysqli_query($db,$sSQL);
$row = mysqli_fetch_array($result);
$totalRegistros = $row["count(*)"];

$noPaginas = $totalRegistros/$noRegistros; 

?>
<tr>
    <td colspan="2" align="center"><?php echo "<strong>Total registros: </strong>".$totalRegistros; ?></td>
    <td colspan="2" align="center"><?php echo "<strong>Pagina: </strong>".$pagina; ?></td>
</tr>
<tr bgcolor="f3f4f1">
    <td colspan="4" align="right"><strong>Pagina:
<?php
for($i=0; $i<=$noPaginas; $i++) { 
	if($i == $pagina){
		echo "<font color=red>$i </font>"; 
	}else{
		echo "<a href=\"?pagina=".$i."&searchs=".'%a%'."\" style=color:#000;> ".$i."</a>";
}

}
?>
	</strong></td>
</tr>
</table>
