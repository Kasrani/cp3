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

if (isset($_GET['section'])) {
	$section = $_GET['section'];
}

// TODO 
// recup 'section' en methode poste post
// recup id
// param http 'action'
include("model/gestion_categories.php");
$listeCategories = array();

// categories.php (CONTROLLER SECONDAIRE)
switch ($action) {
	case 'liste':
	$listeCategories = getCategories($maConnexion);
	//var_dump($listeCategories);
		include_once ("views/categories/home.php");
		break;

		case('crea');
		include_once("views/categories/crea.php");
		break;

		case('crea-valid');
		//recup form
		$data = array("libelle"=>$_POST['champ_libelle']);
		insertCategories($maConnexion, $data);
		$listeCategories = getCategories($maConnexion);
		include_once("views/categories/home.php");
		break;

}

?>
</div>

</body>
</html>