<?php
class Client {
	private $nom;
	private $prenom;
	public function payer() {
		echo "Je paye";
	}
	public function getNom () {
		return $this->nom;
	}
	public function setNom ($zeNom) {
		$this->nom = $zeNom;
	}
	public function getPrenom () {
		return $this->prenom;
	}
	public function setPrenom ($prenom){
		$this->prenom = $prenom;
	}

} // Fin Client
?>