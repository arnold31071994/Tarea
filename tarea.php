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
	

	



	<a href="<?php
	 echo "<script language='JavaScript'>
	location.href = 'https://www.youtube.com/'
	</script>";
?>"> ir a youtube</a>
		

	


	<?php
if (isset($_POST['municipio'])) {
    $arr = array();
    //asignar los datos del formulario a la variable $value en este caso 6
    foreach ($_POST['municipio'] as $value){
    	//asignar los valores del input al array
        foreach($value as $llave=>$valor){
            $arr[$llave] = $valor;
        }
    }
    // imprimir en pantalla los datos del array dentro de la etiqueta <prev>
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
// asignar un valor a la variable $municipio  desde donde el array comenzara a contar
$municipio = 6;
?>
<form action="" method="post">
    <?php
    // contador para aumentar el numero de inputs
    for ($i = 0; $i <= 5; $i++) {
        ?>
        <!-- input que recibe datos y luego de enviarlo usando el post lo imprime en pantalla -->
        <input type="text" name="municipio[][<?php echo $municipio; ?>]"/>
        <?php
        ++$municipio;
    }
    ?>
    <input type="submit" value="Enviar">
</form>

</body>