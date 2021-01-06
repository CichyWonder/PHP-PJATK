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
		color: white;
	}
</style>
<table border="1">

<body>
	<?php
		$str="ABRAKADABRA";
		$size=strlen($str);
			for($i=0; $size>$i; $i++)
			{
			
			if ($i%2!=0)
			{
				echo "<tr> <td class=\"czarna\">$str[$i]</td> </tr>";
			}
			else
				echo "<tr> <td>$str[$i]</td> </tr>";
		
			}
			
	?>

</table>
</p>
</body>
</html>