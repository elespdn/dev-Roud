<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


$record_id = $_POST['record_id'];


$visualize = "SELECT fiche_texte.id, titre, cote, ensemble.ensemble, type.type, annotation.annotation, addition.addition, support.support, numbered.numbered, support_info, instrument.instrument, statut.statut, genre.genre, dates, dossier.dossier, publie, numerise, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id LEFT JOIN annotation ON fiche_texte.annotation_id = annotation.id LEFT JOIN addition ON fiche_texte.addition_id = addition.id INNER JOIN support ON fiche_texte.support_id = support.id LEFT JOIN numbered ON fiche_texte.numbered_id = numbered.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id INNER JOIN dossier ON fiche_texte.dossier_id = dossier.id WHERE fiche_texte.id = '$record_id' ";

if ($fiche = mysqli_query($con, $visualize)) {
	while ($row=mysqli_fetch_array($fiche)) {

    	echo "<table id='table_fiche'>";  // Pour jquery doit etre:  id="table_id" class='display'
		echo "<tbody><tr><td>N°</td><td>";   // Pour jquery doit avoir:  thead tr th
		echo $row['id'];
		echo "</td></tr><tr><td>Titre</td><td>";
		echo $row['titre'];
		echo "</td></tr><tr><td>Cote</td><td>";
		echo $row['cote'];
		echo "</td></tr><tr><td>Ensemble</td><td>";
		echo $row['ensemble'];
		echo "</td></tr><tr><td>Type de document</td><td>";
		echo $row['type'];
		echo "</td></tr><tr><td>Annoté</td><td>";
		echo $row['annotation'];
		echo "</td></tr><tr><td>Avec adjonction</td><td>";
		echo $row['addition'];
		echo "</td></tr><tr><td>Support</td><td>";
		echo $row['support'];
		echo "</td></tr><tr><td>Numeroté</td><td>";
		echo $row['numbered'];
		echo "</td></tr><tr><td>Info support</td><td>";
		echo $row['support_info'];
		echo "</td></tr><tr><td>Instrument d'&#233;criture</td><td>";
		echo $row['instrument'];
		echo "</td></tr><tr><td>Statut g&#233;n&#233;tique</td><td>";
		echo $row['statut'];
		echo "</td></tr><tr><td>Genre</td><td>";
		echo $row['genre'];
		echo "</td></tr><tr><td>Date / Datation</td><td>";
		echo $row['dates'];
		echo "</td></tr><tr><td>Dossier</td><td>";
		echo $row['dossier'];
		echo "</td></tr><tr><td>Version publiée</td><td>";
		echo $row['publie'];
		echo "</td></tr><tr><td>Numeriser</td><td>";
		echo $row['numerise'];
		echo "</td></tr><tr><td>Commentaire</td><td>";
		echo $row['commentaire'];
		echo "</td></tr></tbody></table>";
	    } 
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}



mysqli_close($con); 

?>  