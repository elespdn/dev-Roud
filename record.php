<html>  
	<head>  
		<title>Fiche</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css"/>


		<!-- Pas de jquery datatables ici, parce que c'est juste deux colomnes , pas de header, et on a pas besoin de toutes ces options. Note: jquery dt marche seulement si il y a thead tr th dans la table -->

	</head>

	<body>  

		<div class="menu">
			<h2 id="home"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="form_insert.php">remplir fiche</a></li>
			</ul>
		</div>

		<div class="content">

			<div>

<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents



$record_id = $_POST['dbid'];


echo "<h3>Fiche n° $record_id</h3><div>";


$visualize = "SELECT fiche_texte.id, titre, cote, ensemble.ensemble, type.type, support.support, instrument.instrument, statut.statut, genre.genre, dates_dates, dossier.dossier, publie, numerise, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id INNER JOIN dossier ON fiche_texte.dossier_id = dossier.id WHERE fiche_texte.id = '$record_id' ";

if ($fiche = mysqli_query($con, $visualize)) {
	while ($row=mysqli_fetch_array($fiche)) {

    	echo "<table id='table_fiche'>";  // Pour jquery doit etre:  id="table_id" class='display'
		echo "<tbody><tr><td>Titre</td><td>";
		echo $row['titre'];
		echo "</td></tr><tr><td>Cote</td><td>";
		echo $row['cote'];
		echo "</td></tr><tr><td>Ensemble</td><td>";
		echo $row['ensemble'];
		echo "</td></tr><tr><td>Type de document</td><td>";
		echo $row['type'];
		echo "</td></tr><tr><td>Support</td><td>";
		echo $row['support'];
		echo "</td></tr><tr><td>Instrument d'&#233;criture</td><td>";
		echo $row['instrument'];
		echo "</td></tr><tr><td>Statut g&#233;n&#233;tique</td><td>";
		echo $row['statut'];
		echo "</td></tr><tr><td>Genre</td><td>";
		echo $row['genre'];
		echo "</td></tr><tr><td>Date / Datation</td><td>";
		echo $row['dates_dates'];
		echo "</td></tr><tr><td>Dossier</td><td>";
		echo $row['dossier'];
		echo "</td></tr><tr><td>Version publiée</td><td>";
		echo $row['publie'];
		echo "</td></tr><tr><td>Numeriser</td><td>";
		echo $row['numerise'];
		echo "</td></tr><tr><td>Commentaire</td><td>";
		echo $row['commentaire'];
		echo "</td></tr></tbody></table>";


		echo "	<form action='form_update.php' method='post'>
					<input type='hidden' name='record_id' value='$record_id'/>
					<div id='submit'>
						<h3>Modifier la fiche n° $record_id ?</h3>
						<input type='submit' value='Modifier'/> 
					<div/> 
				</form>";


	    } 
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}



mysqli_close($con); 

?>  
		</div>

	</div> <!-- fin content -->
</body>  
</html>  

