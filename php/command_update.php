<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


$record_id = $_POST['record_id'];



		echo "	<form action='form_update.php' method='post'>
					<input type='hidden' name='record_id' value='$record_id'/>
					<div id='submit'>
						<h3>Modifier la fiche n° $record_id ?</h3>
						<input type='submit' value='Modifier'/> 
					<div/> 
				</form>";


mysqli_close($con); 

?>  