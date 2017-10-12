<html>  
	<head>  
		<title>Biblio</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css"/>


		<!-- ## jquery datatables ## 
			Selected options: 
				Main libraries
					jQuery 1.x   DataTables styling   DataTables core  
				Extensions 
		-->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/jqc-1.12.3/dt-1.10.16/b-1.4.2/cr-1.4.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/jqc-1.12.3/dt-1.10.16/b-1.4.2/cr-1.4.1/datatables.min.js"></script>

		<script> // initialize datatables - NECESSARY
			    $(document).ready(function(){
					    $('#table_id').DataTable({
					    	colReorder: true
					    });
					});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#eyeopen_instructions").click(function(){
				    $("#col_toggle_instructions").toggle();
				}); 
			});
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
$visualizeall = "SELECT * FROM biblio";

if ($query = mysqli_query($con, $visualizeall)) {

	echo "	<table id='table_id' class='display'>
				<thead>
					<tr>
						<th>N°</th>
						<th>Type</th>
						<th>Auteur</th>
						<th>Titre</th>
						<th>Publication</th>
						<th>Dir./éd./trad.</th>
						<th>Numéro</th>
						<th>Lieu</th>
						<th>Maison d'édition</th>
						<th>Date</th>
						<th>Pages</th>
						<th>Repris</th>
						<th>Retranscription</th>
						<th>Intérêt pour le site</th>
						<th>Déjà numérisé</th>
					</tr>
				</thead>
				<tbody>";

	while ($row=mysqli_fetch_array($query)) {

		$row_id = $row['id'];

		echo "<tr><td>";
		echo $row['id'];
		echo "</td><td>";
		echo $row['type'];
		echo "</td><td>";
		echo $row['creator'];
		echo "</td><td>";
		echo $row['title'];
		echo "</td><td>";
		echo $row['title_pub'];
		echo "</td><td>";
		echo $row['contributor'];
		echo "</td><td>";
		echo $row['number'];
		echo "</td><td>";
		echo $row['place'];
		echo "</td><td>";
		echo $row['publisher'];
		echo "</td><td>";
		echo $row['date'];
		echo "</td><td>";
		echo $row['format'];
		echo "</td><td>";
		echo $row['reused'];
		echo "</td><td>";
		echo $row['transcribed'];
		echo "</td><td>";
		echo $row['website_interest'];
		echo "</td><td>";
		echo $row['digitized'];
		echo "</td></tr>";
	    } 

	    echo "</tbody></table>";
	    
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}

	$num_rows = mysqli_num_rows($query);
	echo"<h3 style='float:right'>Total : " .$num_rows. " entrée</h3>";


mysqli_close($con); 

?>  
			</div>

<!--			<div id="col_toggle"> <!-- show / hide columns 
				<h3 style="display: inline">Afficher / cacher une colonne&nbsp;&nbsp;&nbsp;</h3>
				<img src="img/eyeopen.png" width="20px" id="eyeopen_col" class="eye" />

				<div style="display: none" id="col_toggle_intern">
					<input type="checkbox" id="check_titre" name="check_titre" checked> Titre</input>
					<input type="checkbox" id="check_cote" name="check_cote"> Cote</input>
					<input type="checkbox" id="check_nouvellecote" name="check_nouvellecote"> Nouvelle cote</input>
					<input type="checkbox" id="check_ensemble" name="check_ensemble" checked> Ensemble editorial</input>
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
					<input type="checkbox" id="check_etape" name="check_etape" checked> Etape</input>
					<input type="checkbox" id="check_numeriser" name="check_numeriser"> Numeriser</input>
					<input type="checkbox" id="check_comm" name="check_comm"> Commentaire</input>
					<input type="checkbox" id="check_numerise_info" name="check_numerise_info"> Cuisine interne</input>
					<input type="checkbox" id="check_resp" name="check_resp"> Responsable</input>
				</div>
			</div>

 			<br/><br/><br/>

			<div id="instructions_toggle"> <!-- show / hide columns --
				<h3 style="display: inline">Indications pour visualiser les données&nbsp;&nbsp;&nbsp;</h3>
				<img src="img/eyeopen.png" width="20px" id="eyeopen_instructions" class="eye" />
				<div style="display: none" id="col_toggle_instructions">
					<ul>
						<li>Ordonner les données de chaque colonne en faisant click sur le titre de la colonne.</li>
						<li>Déplacer les colonnes et changer leur ordre avec drag&amp;drop (glisser-déposer).</li>
					</ul>
				</div>
			</div> -->

		</div> <!-- fin content -->
	</body>  
</html>  

