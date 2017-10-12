<html> 
	<head>  
		<title>Fiche</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css"/>


		<!-- Pas de jquery datatables ici, parce que c'est juste deux colomnes , pas de header, et on a pas besoin de toutes ces options. Note: jquery dt marche seulement si il y a thead tr th dans la table -->

	</head>

	<body>  

		<div class="menu">
			<h2 id="home_update"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="form_insert.php">remplir fiche</a></li>|
				<li><a href="biblio.php">bibliographie</a></li>
			</ul>
		</div>

		<div id="content_update">
			
			<table class="table_update"> <!-- td left: old record, td right: update form -->
				<tr>
					<td id="oldrecord">  <!-- td left: old record -->
						<div>


<?php  
$record_id = $_POST['record_id'];
echo "<h3>Fiche n° $record_id</h3><div>";

require "php/script_visualize.php";

?>


						</div>
					</td> 


					<td id="newrecord">  <!-- td right: update form -->
						<div>

							<form action='php/hidden_update.php' method='POST'> 
			
								<h1 class="page_title">Modifier la fiche</h1>


<?php
require "php/script_update.php";  

echo "
							<input type='hidden' name='record_id' value='$record_id'/>
								
								<div id='submit'>
									<h3>Modifier la fiche n° $record_id ?</h3>
									<input type='submit' value='Modifier'/> 
								<div/>";

?>

							</form>
						</div>
					</td>
				</tr>
			</table>

		</div>  <!-- fin content -->
	</body>
</html>



