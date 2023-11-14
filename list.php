<?php
	include('cnx.php');
?>

<html>

	<head>
		<title>Liste des clients</title>
		
	</head>

	<body>
	<div>
			<div>ID_C</div>
			<div>Nom</div>
			<div>Prénom</div>
			
<?php

	$res = recupererListeUtilisateurs();

	// Affichage à l'écran
	foreach ($res as $row) {
		echo '<div>'.$row['ID_C'].'</div>'; 
		echo '<div>'.$row['Nom'].'</div>';
		echo '<div>'.$row['Prenom'].'</div>';
		echo '<br/>';
	}
			
	// Fermeture de la connexion
	/*if ($conn != null)
		$conn->close();*/
?>
		</div>
	</body>
</html>