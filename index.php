

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
	include 'tarea.php';
	?>

	<?php 
		
		

	$preserva = array("if", "else", "include","and","echo","die()");

	echo "estas son algunas palabras reservadas: <br> ";
	for($i = 0; $i < count($preserva); $i++){
		echo "<table border=1 width='5%'><tr><td>".$preserva[$i]." </td></tr></table>";
	}

	

	 ?>

	 
<table>	<tr><td></td></tr></table>

 </body>
 </html>