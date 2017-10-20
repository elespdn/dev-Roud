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
		<script type="text/javascript" src="js/column_visibility.js"></script>
		<script type="text/javascript">

			
			$(document).ready(function(){
				
				$("#eyeopen_col").click(function(){
				    $("#col_toggle_intern").toggle();
				}); 

				$("#eyeopen_instructions").click(function(){
				    $("#col_toggle_instructions").toggle();
				}); 
			});

/* this does not work
			$(document).ready(function(){
				$("#eyeopen").click(function(){
				    $("#col_toggle_intern").show();
				    document.getElementById("eyeopen").src = "img/eyeclosed.png";
				    document.getElementById("eyeopen").id = "eyeclosed";
				}); 


				$("#eyeclosed").click(function(){
				    $("#col_toggle_intern").hide();
				    document.getElementById("eyeclosed").src = "img/eyeopen.png";
				    document.getElementById("eyeclosed").id = "eyeopen";
				});
			});*/
			
			
		</script>
		

	</head>

	<body>  

		<div class="menu">
			<h2 id="home_search"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="form_insert.php">remplir fiche</a></li>|
				<li><a href="biblio.php">bibliographie</a></li>
			</ul>
		</div>

		<div id="content_search">


			<div>

<?php  

// Données de connexion placées dans un fichier externe  
require "php/connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents


// LEFT JOIN if join includes NULL values
$visualizeall = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble.ensemble, type.type, photocopy, annotation, addition, support.support, numbered, support_info, instrument.instrument, color.color, other_tool, statut.statut, genre.genre, dates, dossier.dossier, dossierplus, biblio.type, biblio.creator, biblio.title, biblio.title_pub, biblio.number, biblio.publisher, biblio.date, biblio.id as biblioid, publie, numerise, commentaire, numerise_info, resp.resp FROM fiche_texte INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id INNER JOIN type ON fiche_texte.type_id = type.id INNER JOIN support ON fiche_texte.support_id = support.id INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id LEFT JOIN color ON fiche_texte.color_id = color.id INNER JOIN statut ON fiche_texte.statut_id = statut.id INNER JOIN genre ON fiche_texte.genre_id = genre.id LEFT JOIN dossier ON fiche_texte.dossier_id = dossier.id LEFT JOIN resp ON fiche_texte.resp_id = resp.id LEFT JOIN biblio ON fiche_texte.biblio_id = biblio.id";

if ($query = mysqli_query($con, $visualizeall)) {

	echo "	<table id='table_id' class='display'>
				<thead>
					<tr>
						<th>N°</th>
						<th>Titre</th>
						<th>Cote</th>
						<th>Nouvelle cote</th>
						<th>Ensemble</th>
						<th>Photocopie</th>
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
						<th>Étape</th>
						<th>Version publiée</th>
						<th>Numeriser</th>
						<th>Commentaire</th>
						<th>Cuisine interne</th>
						<th>Resp</th>
					</tr>
				</thead>
				<tbody>";

	while ($row=mysqli_fetch_array($query)) {

		$row_id = $row['id'];

		echo "<tr><td>";
		echo "<form action='record.php' method='post'><input id='search_id' type='submit' name='record_id' value='$row_id'/></form>"; 
		
		echo "<span style='display:none'>". $row_id ."</span>";

		echo "</td><td>";
		echo $row['titre'];
		echo "</td><td>";
		echo $row['cote'];
		echo "</td><td>";
		echo $row['nouvelle_cote'];
		echo "</td><td>";
		echo $row['ensemble'];
		echo "</td><td>";
		echo $row['photocopy'];
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
		echo "</td><td>";
		echo $row['numerise'];
		echo "</td><td>";
		echo $row['commentaire'];
		echo "</td><td>";
		echo $row['numerise_info'];
		echo "</td><td>";
		echo $row['resp'];
		echo "</td></tr>";
	    } 

	    echo "</tbody></table>";
	    
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}

	$num_rows = mysqli_num_rows($query);
	echo"<h3 style='float:right'>Total : " .$num_rows. " fiches</h3>";


mysqli_close($con); 

?>  
			</div>

			<div id="col_toggle"> <!-- show / hide columns -->
				<h3 style="display: inline">Afficher / cacher une colonne&nbsp;&nbsp;&nbsp;</h3>
				<img src="img/eyeopen.png" width="20px" id="eyeopen_col" class="eye" />

				<div style="display: none" id="col_toggle_intern">
					<input type="checkbox" id="check_titre" name="check_titre" checked> Titre</input>
					<input type="checkbox" id="check_cote" name="check_cote"> Cote</input>
					<input type="checkbox" id="check_nouvellecote" name="check_nouvellecote"> Nouvelle cote</input>
					<input type="checkbox" id="check_ensemble" name="check_ensemble" checked> Ensemble Éditorial</input>
					<br/><br/>
					<input type="checkbox" id="check_photocopy" name="check_photocopy"> Photocopie</input>
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
					<input type="checkbox" id="check_etape" name="check_etape" checked> Étape</input>
					<input type="checkbox" id="check_numeriser" name="check_numeriser"> À numériser</input>
					<input type="checkbox" id="check_comm" name="check_comm"> Commentaire</input>
					<input type="checkbox" id="check_numerise_info" name="check_numerise_info"> Cuisine interne</input>
					<input type="checkbox" id="check_resp" name="check_resp"> Responsable</input>
				</div>
			</div>

			<br/><br/><br/>

			<div id="instructions_toggle"> <!-- show / hide columns -->
				<h3 style="display: inline">Indications pour visualiser les données&nbsp;&nbsp;&nbsp;</h3>
				<img src="img/eyeopen.png" width="20px" id="eyeopen_instructions" class="eye" />
				<div style="display: none" id="col_toggle_instructions">
					<ul>
						<li>Ordonner les données de chaque colonne en cliquant sur le titre de la colonne.</li>
						<li>Déplacer les colonnes et changer leur ordre avec drag&amp;drop (glisser-déposer).</li>
					</ul>
				</div>
			</div>

		</div> <!-- fin content -->
	</body>  
</html>  

