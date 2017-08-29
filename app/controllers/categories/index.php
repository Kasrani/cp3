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
<?php
// par défaut, personne n'a cliqué. On envoie l'utilisateur sur la homepage.
$section = "home";
// Quel action est demandée pour la gestion de l'entité
$action = "liste";
if (isset($_GET['section'])) {
	$section = $_GET['section'];
}

// TODO 
// recup 'section' en methode poste post
// recup id
// param http 'action'
// categories.php (CONTROLLER SECONDAIRE)
switch ($action) {
	case 'liste':
		include_once ("views/categories/home.php");
		break;
}

?>
</div>

</body>
</html>