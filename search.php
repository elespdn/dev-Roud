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
			    var table = $('#table_id').DataTable( {
			        // attention!! rowReorder fait que le button ID ne marche pas!!! Ne pas l'utiliser
			        colReorder: true
			    } );

			    // visibility of columns by default - mind the S 'column(s)' for single or multiple cols chosen
			    table.columns( [2, 3, 6, 7, 9, 10, 12, 14, 17, 18, 19] ).visible( false );

			    // CHECK ALL NUMEBERS!!!
			    // variables for better handing the buttons for show/hide columns
			    var col_cote = table.column(2);
			    var col_ensemble = table.column(3);
			    var col_type = table.column(4);
			    var col_annote = table.column(5);
			    var col_adjonction = table.column(6);
			    var col_support = table.column(7);
			    var col_numerote = table.column(8);
			    var col_infosupport = table.column(9);
			    var col_numeriser = table.column(16);
			    var col_genre = table.column(12);

			    // scripts for show/hide each column
			    $("#check_cote").click(function(){
				    col_cote.visible(!col_cote.visible());
				});
				$("#check_ensemble").click(function(){
				    col_ensemble.visible(!col_ensemble.visible());
				});
				$("#check_type").click(function(){
				    col_type.visible(!col_type.visible());
				});
				$("#check_annote").click(function(){
				    col_annote.visible(!col_annote.visible());
				});
				$("#check_adjonction").click(function(){
				    col_adjonction.visible(!col_adjonction.visible());
				});
				$("#check_support").click(function(){
				    col_support.visible(!col_support.visible());
				});
				$("#check_numerote").click(function(){
				    col_numerote.visible(!col_numerote.visible());
				});
				$("#check_infosupport").click(function(){
				    col_infosupport.visible(!col_infosupport.visible());
				});
				$("#check_genre").click(function(){
				    col_genre.visible(!col_genre.visible());
				});
				$("#check_publie").click(function(){
				    col_publie.visible(!col_publie.visible());
				});
				$("#check_numeriser").click(function(){
				    col_numeriser.visible(!col_numeriser.visible());
				});


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
$visualizeall = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble.ensemble, type.type, annotation.annotation, addition.addition, support.support, numbered.numbered, support_info, instrument.instrument, color.color, other_tool, statut.statut, genre.genre, dates, dossier.dossier, publie, numerise, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id LEFT JOIN annotation ON fiche_texte.annotation_id = annotation.id LEFT JOIN addition ON fiche_texte.addition_id = addition.id INNER JOIN support ON fiche_texte.support_id = support.id LEFT JOIN numbered ON fiche_texte.numbered_id = numbered.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id LEFT JOIN color ON fiche_texte.color_id = color.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id INNER JOIN dossier ON fiche_texte.dossier_id = dossier.id";

if ($query = mysqli_query($con, $visualizeall)) {

	$num_rows = mysqli_num_rows($query);

	
	echo"<h3>Total : " .$num_rows. " fiches.</h3>";

	echo "	<table id='table_id' class='display'>
				<thead>
					<tr>
						<th>N°</th>
						<th>Titre</th>
						<th>Cote</th>
						<th>Nouvelle cote</th>
						<th>Ensemble</th>
						<th>Type de document</th>
						<th>Annoté</th>
						<th>Adjonction(s)</th>
						<th>Support</th>
						<th>Numéroté</th>
						<th>Info support</th>
						<th>Instrument d'&#233;criture</th>
						<th>Autre(s) instrument(s)</th>
						<th>Date / Datation</th>
						<th>Genre</th>
						<th>Dossier</th>
						<th>Etape</th>
						<th>Version publiée</th>
						<th>Numeriser</th>
						<th>Commentaire</th>
					</tr>
				</thead>
				<tbody>";

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
		echo $row['nouvelle_cote'];
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
		echo $row['numbered'];
		echo "</td><td>";
		echo $row['support_info'];
		echo "</td><td>";
		echo $row['instrument'];
		echo "&nbsp;";
		echo $row['color'];
		echo "</td><td>";
		echo $row['other_tool'];
		echo "</td><td>";
		echo $row['dates'];
		echo "</td><td>";
		echo $row['genre'];
		echo "</td><td>";
		echo $row['dossier'];
		echo "</td><td>";
		echo $row['statut'];
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

			<div id="col_toggle"> <!-- show / hide columns -->
				<h3>Afficher / cacher une colonne</h3>
				<input type="checkbox" id="check_cote" name="check_cote"> Cote</input>
				<input type="checkbox" id="check_ensemble" name="check_ensemble"> Ensemble</input>
				<br/><br/>
				<input type="checkbox" id="check_type" name="check_type"> Type de document</input>
				<input type="checkbox" id="check_annote" name="check_annote"> Annoté</input>
				<input type="checkbox" id="check_adjonction" name="check_adjonction"> Avec adjonctions</input>
				<input type="checkbox" id="check_support" name="check_support"> Support</input>
				<input type="checkbox" id="check_numerote" name="check_numerote"> Numéroté</input>
				<input type="checkbox" id="check_infosupport" name="check_infosupport"> Info support</input>
				<br/><br/>
				<input type="checkbox" id="check_genre" name="check_genre"> Genre</input>
				<input type="checkbox" id="check_publie" name="check_publie"> Version publiée</input>
				<input type="checkbox" id="check_numeriser" name="check_numeriser"> Numeriser</input>
				<p>Select / Deselect all</p>
			</div>

		</div> <!-- fin content -->
	</body>  
</html>  

