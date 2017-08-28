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
	echo"<div class='alert alert-info' role='alert'><span class='glyphicon glyphicon-time' aria-hidden='true'></span>     Semaine de : " . date('Y/m/d') . "</div>";
	echo"<br>";
	$listeFruits = array();
	$listeFruits = array("Pomme", "Poire", "Banane");
	$listeCapitales = array();
	$listeCapitales = array("France", "Italie", "Tunisie");?> 
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

	<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;liste des capitales <span class="badge">With For method</span></div>
	
	<table class='table'>
		<thead>
			<th>Liste des Pays</th> 
	</thead>
		<tbody>
			 	
				<?php for( $i=0; $i < count($listeCapitales); $i++ ) {
						echo "<tr>";
						echo "<td class='warning'>$listeCapitales[$i]</td></tr>"; 
						echo "<tr/>"; 
					?>
				<?php } ?>
		</tbody>

	</table>
	<?php
	/* OBJETS */
	include ("client.php");
	$objetClient1 = new Client();
	$objetClient1 ->setPrenom("Bob");
	$objetClient1 ->setNom("Morane");

	$c2 = new Client();
	$c2 ->setPrenom("Mourad");
	$c2 ->setNom("Kasrani");
	$ListeClients2 = array($objetClient1, $c2);
	/////////////////////////////////
	/* 
	var_dump($objetClient1);
	echo $objetClient1->getPrenom();
	echo "<br/>";
	echo $objetClient1->getNom();
	*/
	/* OBJETS */
	?>
</div>

</body>
</html>