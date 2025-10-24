<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<img src="tag.jpg" height="450px">
</body>
</html>
<?php

	require_once ("conn.php");

	$resultado = mysqli_query($conn,"select * from tbator"); 

	
    echo "<br><br>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>Código</td><td>Ator</td>";
    echo "</tr>";
    while($linha = mysqli_fetch_array($resultado)) 
    { 
    	echo "<tr>";
    		echo "<td>";
    			echo $linha['codAtor'];
			echo"</td>";
			echo "<td>" ;
				echo $linha['ator']; 
			echo"</td>";
		echo "</tr>";
               
    }
    echo "</table";
?>
