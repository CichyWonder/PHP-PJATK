<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> petla </title>
</head>
<p>
<style>
	.czarna{
		background:black;
	}
</style>
<table border="1" width= 800 height=800>

<body>
	<?php
		$str=8;
		echo "<tr";
			for($i=0; $str>$i; $i++)
			{
				echo "<tr>";
				for ($j=0 ; $str>$j; $j++)
			{
				if(($i+$j)%2!=0)
				echo "<td class=\"czarna\"></td>";
				else
					echo "<td> </td>";
			}
			
			}
		echo "</tr>";
			
	?>

</table>
</p>
</body>
</html>