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
$titrePage = "Catégories";
?>
<p>Bienvenue dans la gestion des catégories</p>
<p><a href="index.php?section=categories&action=crea"><img style="height: 30px;" src="assets/images/add.png"></a></p>
<table>
	<caption>Listing categories</caption>
	<tr>
		<th>Libellé</th>
		<th></th>
		<th></th>
	</tr>
	<?php 	foreach ($listeCategories as $zeCat) {
	?>
	<tr>
		<td><?php echo $zeCat['libelle']; ?></td>
		<td><a href="index.php?section=categories&action=modif&id=<?php echo $zeCat['id_categorie']; ?>"><img style="height: 30px;" src="assets/images/ICO_MODIFY.png"/></a></td>
		<td><a href="index.php?section=categories&action=sup&id=<?php echo $zeCat['id_categorie']; ?>"><img style="height: 20px;" src="assets/images/ICO_supprimer.png"/></a></td>
	</tr>
	<?php 
		} 
	?>

</table>
<?php
$content = ob_get_clean();
include_once ("template.php");

?>
</div>

</body>
</html>