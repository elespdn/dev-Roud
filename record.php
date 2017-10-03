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

$record_id = $_POST['record_id'];

echo "<h3>Fiche n° $record_id</h3><div>";

require "php/script_visualize.php";
require "php/command_update.php";

?>


		</div>

	</div> <!-- fin content -->
</body>  
</html>  

