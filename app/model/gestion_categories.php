<?php
//gestion_categories.php
function getCategories($maConnexion){
	$requeteSql = "SELECT id_categorie, libelle FROM categories";

	//on prepare la requete, on s'affranchit de toute injection SQL
	$jeuDeResultat = $maConnexion->prepare($requeteSql);

	//on execute la requete
	$jeuDeResultat->execute();

	//on retourne les donnees
	return $jeuDeResultat->fetchALL();
}
function insertCategories($maConnexion, $data){
	$libelle = $data['libelle'];
	$requeteSql = "INSERT INTO categories (libelle) VALUES ('$libelle') ";

	$result=$maConnexion->prepare($requeteSql);
	$result->execute();

}

?>