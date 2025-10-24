<?php

	require_once ("conn.php");

	$resultado = mysqli_query($conn,"select * from tbdiretorfilme"); 

	
    echo "<br><br>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>Código</td><td>Diretor</td>";
    echo "</tr>";
    while($linha = mysqli_fetch_array($resultado)) 
    { 
    	echo "<tr>";
    		echo "<td>";
    			echo $linha['codDiretorFilme'];
			echo"</td>";
			echo "<td>" ;
				echo $linha['nomeDiretor']; 
			echo"</td>";
		echo "</tr>";
               
    }
    echo "</table";
?>
