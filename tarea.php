<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tarae</title>
</head>
<body>
	




	<?php 
	$x=144;
	$y=999;
	$moneda = 1;
	$divisa=54.10;

	$mult=$x+$y;
	$div=$y/$x;
	$sum=$x+$y;
	$res=$y-$x;
	$ver=phpversion();
	$nom='Arnold Cedano Reyes';


//mostrar tabla con los datos en las variables de manera ordenada
	echo "
	

	<table border='2' method='POST'>
		<tr>
			<td>nombre</td>
			<td>suma</td>
			<td>resta</td>
			<td>multiplicacion</td>
			<td>division</td>
		</tr>
		<tr>
			<td>".$nom."</td>
			<td>".$sum."</td>
			<td>".$res."</td>
			<td>".$mult."</td>
			<td>".$div."</td>
		</tr>
	</table> <br>";





 ?>

 <?php 

	$ip = $_SERVER['REMOTE_ADDR']; 
	$ips = $_SERVER['SERVER_ADDR']; 
	$ficha = $_SERVER['DOCUMENT_ROOT'];
	$ver=phpversion();
	$url=$_SERVER['REQUEST_URI'];
	

	echo "
	

	<table border='2' method='POST'>
		<tr>
			<td>version</td>
			<td>ip servidor</td>
			<td>fichero</td>
			<td>URL</td>
			<td>ip clente</td>
		</tr>
		<tr>
			<td>".$ver."</td>
			<td>".$ips."</td>
			<td>".$ficha."</td>
			<td>".$url."</td>
			<td>".$ip."</td>
		</tr>
	</table> <br>";
	?>


	<?php
if (isset($_POST['municipio'])) {
    $arr = array();
    foreach ($_POST['municipio'] as $value){
        foreach($value as $llave=>$valor){
            $arr[$llave] = $valor;
        }
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
$municipio = 6;
?>
<form action="" method="post">
    <?php
    for ($i = 0; $i <= 5; $i++) {
        ?>
        <input type="text" name="municipio[][<?php echo $municipio; ?>]"/>
        <?php
        ++$municipio;
    }
    ?>
    <input type="submit" value="Enviar">
</form>

</body>