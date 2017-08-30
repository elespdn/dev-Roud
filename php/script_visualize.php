<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


$record_id = $_POST['record_id'];


$visualize = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble.ensemble, photocopy, type.type, annotation, addition, support.support, numbered, support_info, instrument.instrument, color.color, other_tool, statut.statut, genre.genre, dates, dossier.dossier, dossierplus, publie, numerise, numerise_info, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id INNER JOIN color ON fiche_texte.color_id = color.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id LEFT JOIN dossier ON fiche_texte.dossier_id = dossier.id WHERE fiche_texte.id = '$record_id' ";

if ($fiche = mysqli_query($con, $visualize)) {
	while ($row=mysqli_fetch_array($fiche)) {

    	echo "<table id='table_fiche'>";  // Pour jquery doit etre:  id="table_id" class='display'
		echo "<tbody><tr><td>N°</td><td>";   // Pour jquery doit avoir:  thead tr th
		echo $row['id'];
		echo "</td></tr><tr><td>Titre</td><td>";
		echo $row['titre'];
		echo "</td></tr><tr><td>Cote</td><td>";
		echo $row['cote'];
		echo "</td></tr><tr><td>Nouvelle cote</td><td>";
		echo $row['nouvelle_cote'];
		echo "</td></tr><tr><td>Ensemble</td><td>";
		echo $row['ensemble'];
		echo "</td></tr><tr><td>Photocopie</td><td>";
		echo $row['photocopy'];
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
		echo ",&nbsp;";
		echo $row['color'];
		echo "</td></tr><tr><td>Autre(s) instrument(s)</td><td>";
		echo $row['other_tool'];
		echo "</td></tr><tr><td>Date / Datation</td><td>";
		echo $row['dates'];
		echo "</td></tr><tr><td>Genre</td><td>";
		echo $row['genre'];
		echo "</td></tr><tr><td>Dossier</td><td>";
		echo $row['dossier'];
		if ($row['dossierplus'] != '') {
			echo ",&nbsp;";
			echo $row['dossierplus'];
		} 		
		echo "</td></tr><tr><td>Etape</td><td>";
		echo $row['statut'];
		echo "</td></tr><tr><td>Version publiée</td><td>";
		echo $row['publie'];
		echo "</td></tr><tr><td>Numeriser</td><td>";
		echo $row['numerise'];
		echo "</td></tr><tr><td>Notes pour le site</td><td>";
		echo $row['numerise_info'];
		echo "</td></tr><tr><td>Commentaire</td><td>";
		echo $row['commentaire'];
		echo "</td></tr></tbody></table>";
	    } 
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}



mysqli_close($con); 

?>  