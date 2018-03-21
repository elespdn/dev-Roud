
<?php   

// %%%%%%%%%%%%%%
// Ce file produit une tableau pour visualiser les données d'une entrée spécifique
// %%%%%%%%%%%%%%




// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


$record_id = $_POST['record_id'];


$visualize = "SELECT fiche_texte.id, titre, archive.archive, oldcote, cote, ensemble.ensemble, photocopy, type.type, annotation, support.support, support_info, instrument.instrument, color.color, other_tool, statut.statut, dates, biblio.type as bibliotype, biblio.creator, biblio.title, biblio.title_pub, biblio.number, biblio.publisher, biblio.date, biblio.id as biblioid, publie, alreadydigitized, numerise_info, commentaire, resp.resp FROM fiche_texte INNER JOIN archive ON fiche_texte.archive_id = archive.id INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id INNER JOIN color ON fiche_texte.color_id = color.id INNER JOIN statut ON fiche_texte.statut_id = statut.id LEFT JOIN resp ON fiche_texte.resp_id = resp.id LEFT JOIN biblio ON fiche_texte.biblio_id = biblio.id WHERE fiche_texte.id = '$record_id' ";

if ($fiche = mysqli_query($con, $visualize)) {
	while ($row=mysqli_fetch_array($fiche)) {

    	echo "<table id='table_fiche'>";  // Pour jquery doit etre:  id="table_id" class='display'
		echo "<tbody><tr><td>N°</td><td>";   // Pour jquery doit avoir:  thead tr th
		echo $row['id'];
		echo "</td></tr><tr><td>Titre</td><td>";
		echo $row['titre'];
		echo "</td></tr><tr><td>Titre</td><td>";
		echo $row['archive'];
		echo "</td></tr><tr><td>Cote</td><td>";
		echo $row['oldcote'];
		echo "</td></tr><tr><td>Nouvelle cote</td><td>";
		echo $row['cote'];
		echo "</td></tr><tr><td>Ensemble</td><td>";
		echo $row['ensemble'];
		echo "</td></tr><tr><td>Photocopie</td><td>";
		echo $row['photocopy'];
		echo "</td></tr><tr><td>Type de document</td><td>";
		echo $row['type'];
		echo "</td></tr><tr><td>Annoté</td><td>";
		echo $row['annotation'];
		echo "</td></tr><tr><td>Support</td><td>";
		echo $row['support'];
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
		echo "</td></tr><tr><td>Étape</td><td>";
		echo $row['statut'];
		echo "</td></tr><tr><td>Version publiée</td><td>";
		
		if ($row['creator'] != '') {
			echo $row['creator'];
		} 

		if ($row['type'] != '') {

			if ($row['type'] != 'Article') {
			echo ",&nbsp;<i>";
			echo $row['title'];
			echo "</i>";
			} else {
				echo ",&nbsp;'";
				echo $row['title'];
				echo "'";			
			}

		}

		if ($row['title_pub'] != '') {
			echo ",&nbsp;<i>";
			echo $row['title_pub'];
			echo "</i>";
		} 
		if ($row['number'] != '') {
			echo ",&nbsp;";
			echo $row['number'];
		} 
		if ($row['publisher'] != '') {
			echo ",&nbsp;";
			echo $row['publisher'];
		} 
		if ($row['date'] != '') {
			echo ",&nbsp;";
			echo $row['date'];
		} 
		
		if ($row['biblioid'] != '') {
			echo ". [Biblio&nbsp;";
			echo $row['biblioid'];
			echo "]";
		}
		
		if ($row['publie'] != '') {
			echo "&nbsp;-&nbsp;";
			echo $row['publie'];
		} 
		
		echo "</td></tr><tr><td>Déjà numérisé</td><td>";
		echo $row['alreadydigitized'];
		echo "</td></tr><tr><td>Commentaire</td><td>";
		echo $row['commentaire'];
		echo "</td></tr><tr><td>Cuisine interne</td><td>";
		echo $row['numerise_info'];
		echo "</td></tr><tr><td>Responsable</td><td>";
		echo $row['resp'];
		echo "</td></tr></tbody></table>";
	    } 
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}



mysqli_close($con); 

?>  