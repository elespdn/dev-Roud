<html>  
	<head>  
		<title>Fiche</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css"/>
		<script type="text/javascript" src="js/imagerandom.js"></script>  <!-- ne doit PAS etre <script/> (vide), sinon il ne marche pas. La function choosePic() est chargé ONLOAD dans le body -->



		<!-- Pas de jquery datatables ici, parce que c'est juste deux colomnes , pas de header, et on a pas besoin de toutes ces options. Note: jquery dt marche seulement si il y a thead tr th dans la table -->

	</head>

	<body onload="choosePic()">  

		<div class="menu">
			<h2 id="home"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="form_insert.php">remplir fiche</a></li>
			</ul>
		</div>

		<div class="content">

			<table>
				<tr>
					<td>
						<h3>La fiche a été crée :</h3>

						<div>

<?php  

require "php/script_visualize.php";
require "php/script_update.php";

?>  
						</div>
					</td>

					<td>

						<div>
							<img id="imagerandomrecord" class="imagerandom" src="" width="500px" />
						</div>
					</td>
				</tr>
			</table>

		</div> <!-- fin content -->
	</body>  
</html>  

