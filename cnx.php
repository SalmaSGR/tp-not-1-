<?php
// Connexion à la base de données
function connectionBdd() {
	
	// Déclaration des variables de connexion
	$DB_HOST = "127.0.0.1";
	$DB_NAME = "gestionbanque";
	$DB_PORT = 3306;
	$DB_USER = "root";
	$DB_PSWD = "";
	
	try {
		$connString = "mysql:host=".$DB_HOST.";dbname=".$DB_NAME.";port=".$DB_PORT.";charset=utf8";
		$conn = new PDO($connString, $DB_USER, $DB_PSWD);
		return $conn;
	}
	catch(PDOException $e) {
		die("Erreur : " . $e->getMessage());
	}
}


function close_cnx(){
// Ferme la connexion à la base de données
$conn = null;
}
?>
