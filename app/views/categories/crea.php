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
// categories/home.php
// vidage de mémoire
ob_start();
$titrePage = " Catégories:New";
?>
<p>Form de creation de categorie</p>

<form method="post" action="index.php">
<input type="hidden" name="section" value="categories"/>
<input type="hidden" name="action" value="crea-valid"/>
<p><input type="text" name="champ_libelle" value="" placeholder="Libellé"/></p>		
<p><input type="submit" value="Envoyer le formulaire"></p>
</form>


<?php
$content = ob_get_clean();
include_once ("template.php");

?>
</div>

</body>
</html>