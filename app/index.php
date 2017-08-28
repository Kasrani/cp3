<!DOCTYPE html>

<html>
<head>
	<title>app</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

	<h1>COURS PHP 2</h1>
	<?php
	//INDEX.PHP
	echo"<br>";
	$listeFruits = array();
	$listeFruits = array("Pomme", "Poire", "Banane");?> 
	<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;liste des fruits <span class="badge">With For method</span></div>
	
	<table class='table'>
		<thead>
			<th>Liste des fruits</th> 
	</thead>
		<tbody>
			 	
				<?php for( $i=0; $i < count($listeFruits); $i++ ) {
						echo "<tr>";
						echo "<td class='success'>$listeFruits[$i]</td></tr>"; 
						echo "<tr/>"; 
					?>
				<?php } ?>
		</tbody>

	</table>
	
	

	
</div>

</body>
</html>