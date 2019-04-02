<html>  


	<!-- Peu de difference avec record_created.php
		- La fiche a été modifiée/crée
		- Pas d'image random
	-->


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
				<li><a href="form_insert.php">remplir fiche</a></li>|
				<li><a href="biblio.php">bibliographie</a></li>
			</ul>
		</div>

		<div class="content">

			<table>
				<tr>
					<td>
						<h3>La fiche a été modifiée :</h3>

						<div>

<?php  

require "php/script_visualize.php";
require "php/command_update.php"; 

mysqli_close($con); 
?>  
						</div>
					</td>

					<td>

						<!-- Pas d'image random, on pourrait bien eliminer la structure 'table' -->

					</td>
				</tr>
			</table>

		</div> <!-- fin content -->
	</body>  
</html>  

