<html>  
	<head>  
		<title>Recherche</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css"/>


		<!-- ## jquery datatables ## 
			Selected options: 
				Main libraries
					jQuery 1.x   DataTables styling   DataTables core  
				Extensions
					AutoFill[not for us]  Buttons  Column visibility[has to be set from the start]  HTML5 export  JSZip  pdfmake  Print view  ColReorder[enabled!]  RowReorder[enabled!]  Scroller[useless for us]
				Packaging options
					Debug   Single file   CDN
		-->
		
		<link rel="stylesheet" type="text/css" href="css/datatables.css"/>
		<script type="text/javascript" src="js/datatables.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
			    $('#table_id').DataTable( {
			        colReorder: true
			        // attention!! rowReorder fait que le button ID ne marche pas!!! Ne pas l'utiliser
			    } );
			} );
		</script>

		
		

	</head>

	<body>  

		<div class="menu">
			<h2 id="home_search"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="form_insert.php">remplir fiche</a></li>
			</ul>
		</div>

		<div id="content_search">

			<div>

<?php  

// Données de connexion placées dans un fichier externe  
require "php/connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


// LEFT JOIN if join includes NULL values
$visualizeall = "SELECT fiche_texte.id, titre, cote, ensemble.ensemble, type.type, annotation.annotation, addition.addition, support.support, instrument.instrument, statut.statut, genre.genre, dates, dossier.dossier, publie, numerise, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id LEFT JOIN annotation ON fiche_texte.annotation_id = annotation.id LEFT JOIN addition ON fiche_texte.addition_id = addition.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id INNER JOIN dossier ON fiche_texte.dossier_id = dossier.id";

if ($query = mysqli_query($con, $visualizeall)) {

	$num_rows = mysqli_num_rows($query);

	
	echo"<h3>Total : " .$num_rows. " fiches.</h3>";

	echo "<table id='table_id' class='display'><thead><tr><th>N°</th><th>Titre</th><th>Cote</th><th>Ensemble</th><th>Type de document</th><th>Annoté</th><th>Adjonction(s)</th><th>Support</th><th>Instrument d'&#233;criture</th><th>Statut g&#233;n&#233;tique</th><th>Genre</th><th>Date / Datation</th><th>Dossier</th><th>Version publiée</th><th>Numeriser</th><th>Commentaire</th></tr></thead><tbody>";

	while ($row=mysqli_fetch_array($query)) {

		$row_id = $row['id'];

		echo "<tr><td>";
		echo "<form action='record.php' method='post'><input type='submit' name='record_id' value='$row_id'/></form>"; 
		// echo $row_id;
		echo "</td><td>";
		echo $row['titre'];
		echo "</td><td>";
		echo $row['cote'];
		echo "</td><td>";
		echo $row['ensemble'];
		echo "</td><td>";
		echo $row['type'];
		echo "</td><td>";
		echo $row['annotation'];
		echo "</td><td>";
		echo $row['addition'];
		echo "</td><td>";
		echo $row['support'];
		echo "</td><td>";
		echo $row['instrument'];
		echo "</td><td>";
		echo $row['statut'];
		echo "</td><td>";
		echo $row['genre'];
		echo "</td><td>";
		echo $row['dates'];
		echo "</td><td>";
		echo $row['dossier'];
		echo "</td><td>";
		echo $row['publie'];
		echo "</td><td>";
		echo $row['numerise'];
		echo "</td><td>";
		echo $row['commentaire'];
		echo "</td></tr>";
	    } 

	    echo "</tbody></table>";
	    
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}


mysqli_close($con); 

?>  
		</div>

	</div> <!-- fin content -->
</body>  
</html>  

