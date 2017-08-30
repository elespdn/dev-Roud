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
			    var col_titre = table.column(1);
			    var col_cote = table.column(2);
			    var col_nouvellecote = table.column(3);
			    var col_ensemble = table.column(4);
			    var col_type = table.column(5);
			    var col_annote = table.column(6);
			    var col_adjonction = table.column(7);
			    var col_support = table.column(8);
			    var col_numerote = table.column(9);
			    var col_infosupport = table.column(10);
			    var col_instrument = table.column(11);
			    var col_autreinstrument = table.column(12);
			    var col_date = table.column(13);
			    var col_genre = table.column(14);
			    var col_dossier = table.column(15);
			    var col_etape = table.column(16);
			    var col_publie = table.column(17);
			    var col_numeriser = table.column(18);
			    var col_comm = table.column(19);

			    // scripts for show/hide each column
			    $("#check_titre").click(function(){
				    col_titre.visible(!col_titre.visible());
				});
			    $("#check_cote").click(function(){
				    col_cote.visible(!col_cote.visible());
				});
				$("#check_nouvellecote").click(function(){
				    col_nouvellecote.visible(!col_nouvellecote.visible());
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
				$("#check_instrument").click(function(){
				    col_instrument.visible(!col_instrument.visible());
				});
				$("#check_autreinstrument").click(function(){
				    col_autreinstrument.visible(!col_autreinstrument.visible());
				});
				$("#check_date").click(function(){
				    col_date.visible(!col_date.visible());
				});
				$("#check_genre").click(function(){
				    col_genre.visible(!col_genre.visible());
				});
				$("#check_dossier").click(function(){
				    col_dossier.visible(!col_dossier.visible());
				});
				$("#check_etape").click(function(){
				    col_etape.visible(!col_etape.visible());
				});
				$("#check_publie").click(function(){
				    col_publie.visible(!col_publie.visible());
				});
				$("#check_numeriser").click(function(){
				    col_numeriser.visible(!col_numeriser.visible());
				});
				$("#check_comm").click(function(){
				    col_comm.visible(!col_comm.visible());
				});


			} );


			function checkAll(ele) {
			     var checkboxes = document.getElementsByTagName('input');
			     if (ele.checked) {
			         for (var i = 0; i < checkboxes.length; i++) {
			             if (checkboxes[i].type == 'checkbox') {
			                 checkboxes[i].checked = true;
			             }
			         }
			     } else {
			         for (var i = 0; i < checkboxes.length; i++) {
			             console.log(i)
			             if (checkboxes[i].type == 'checkbox') {
			                 checkboxes[i].checked = false;
			             }
			         }
			     }
			 }

			
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
$visualizeall = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble.ensemble, type.type, annotation, addition, support.support, numbered, support_info, instrument.instrument, color.color, other_tool, statut.statut, genre.genre, dates, dossier.dossier, dossierplus, publie, numerise, commentaire FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id LEFT JOIN color ON fiche_texte.color_id = color.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id LEFT JOIN dossier ON fiche_texte.dossier_id = dossier.id";

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
		echo "<form action='record.php' method='post'><input id='search_id' type='submit' name='record_id' value='$row_id'/></form>"; 
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
		echo ",&nbsp;";
		echo $row['color'];
		echo "</td><td>";
		echo $row['other_tool'];
		echo "</td><td>";
		echo $row['dates'];
		echo "</td><td>";
		echo $row['genre'];
		echo "</td><td>";
		echo $row['dossier'];
		if ($row['dossierplus'] != '') {
			echo ",&nbsp;";
			echo $row['dossierplus'];
		} 	
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
				<div id="col_toggle_intern">
					<input type="checkbox" id="check_titre" name="check_titre" checked> Titre</input>
					<input type="checkbox" id="check_cote" name="check_cote"> Cote</input>
					<input type="checkbox" id="check_nouvellecote" name="check_nouvellecote"> Nouvelle cote</input>
					<input type="checkbox" id="check_ensemble" name="check_ensemble" checked> Ensemble editorial</input>
					<br/><br/>
					<input type="checkbox" id="check_type" name="check_type" checked> Type de document</input>
					<input type="checkbox" id="check_annote" name="check_annote"> Annoté</input>
					<input type="checkbox" id="check_adjonction" name="check_adjonction"> Avec adjonctions</input>
					<input type="checkbox" id="check_support" name="check_support" checked> Support</input>
					<input type="checkbox" id="check_numerote" name="check_numerote"> Numéroté</input>
					<input type="checkbox" id="check_infosupport" name="check_infosupport"> Info support</input>
					<input type="checkbox" id="check_instrument" name="check_instrument" checked> Instrument</input>
					<input type="checkbox" id="check_autreinstrument" name="check_autreinstrument"> Autre(s) instrument(s)</input>
					<br/><br/>
					<input type="checkbox" id="check_date" name="check_date" checked> Date</input>
					<input type="checkbox" id="check_genre" name="check_genre"> Genre</input>
					<input type="checkbox" id="check_dossier" name="check_dossier" checked> Dossier</input>
					<input type="checkbox" id="check_publie" name="check_publie"> Version publiée</input>
					<input type="checkbox" id="check_etape" name="check_etape" checked> Etape</input>
					<input type="checkbox" id="check_numeriser" name="check_numeriser"> Numeriser</input>
					<input type="checkbox" id="check_comm" name="check_comm"> Commentaire</input>
				</div>
			</div>

		</div> <!-- fin content -->
	</body>  
</html>  

