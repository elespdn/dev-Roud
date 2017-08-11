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
				<li><a href="form_insert.php">remplir fiche</a></li>
			</ul>
		</div>

		<div id="content_update" class="content">
			
			<table class="table_update">
				<tr>
					<td id="oldrecord">  <!-- cell fiche à remplacer -->
						<div>

<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents



$record_id = $_POST['record_id'];


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
	    } 
	} else {
			echo "Probleme dans l'affichage des données. Error: " . $sql . "<br>" . mysqli_error($con);
		}


echo "</div>
					</td> 







					<td>
						<div>

			

			<form action='update.php' method='POST'> 
			
			<h3>Modifier fiche</h3>

			<table id='table_insert'>
				<tr>
					<td><span>Titre </span></td> 
					<td>
						<textarea rows='1' cols='50' name='title'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Cote </span></td>
					<td>
						<textarea rows='1' cols='50' name='archive'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Ensemble </span></td>
					<td><select name='cluster'>
						<option> </option>"; 
						


$sql = "SELECT * FROM ensemble";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['ensemble']. '</option>';
} 

echo "</select></td>
				</tr>    

				<tr>
					<td><span>Type de document </span></td>
					<td><select name='type'>
						<option> </option>";
					
$sql = "SELECT * FROM type";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['type']. '</option>';
} 

echo "</select></td>
				</tr>    

				<tr>
					<td><span>Support </span></td>
					<td><select name='support'>
						<option> </option>";
					


$sql = "SELECT * FROM support";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['support']. '</option>';
} 

echo "	</select></td>
				</tr>    

				<tr>
					<td><span>Instrument d'&#233;criture </span></td>
					<td><select name='tool'>
						<option> </option>";
				

$sql = "SELECT * FROM instrument";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['instrument']. '</option>';
} 

echo "</select></td>
				</tr>

				<tr>
					<td><span>Statut g&#233;n&#233;tique </span></td>
					<td><select name='status'>
						<option> </option>";
					

$sql = "SELECT * FROM statut";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['statut']. '</option>';
} 


echo "	</select></td>
				</tr>


				<tr>
					<td><span>Genre </span></td>
					<td><select name='genre'>
						<option> </option>"; 
				


$sql = "SELECT * FROM genre";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['genre']. '</option>';
} 


echo "</select></td>
				</tr>


				<tr>
					<td><span>Date / Datation </span></td>
				<!-- Aggiungere una casellina per decidere se è Date o Datation, e constraints per inserire la data nel modo giusto con js! -->
					<td>
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*'></input>
						<br/>
						<span class='suggest'>S'il s'agit d'une datation, ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
						<span class='suggest'>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY', '?'. Tous les mots ('avant', 'apr&#232;s', 'vers', etc.) vont apr&#232;s la date, par exemple '1965-04 avant'. Pour les cas particuliers, considerer le commentaire.</span>

						<!-- <br/>
						<span>Date present dans le ms?</span>
						<select name='source'>
  							<option value='1'>Oui</option>
  							<option value='2'>Non</option>
  						</select> -->
  					
  					</td>
				</tr>    

				<tr>
					<td><span>Dossier </span></td>
					<td><select name='dossier'>
						<option> </option>";
					

$sql = "SELECT * FROM dossier";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['dossier']. '</option>';
} 

echo "</select></td>
				</tr>



				<tr>
					<td><span>Version publiée </span></td> 
					<td>
						<textarea rows='1' cols='50' name='publie'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Numeriser </span></td>
				<!-- numerise, ajouter numero id nelle opzioni dell html -->
					<td><select name='digitize'>
						<option value='oui'>Oui</option>
						<option value='non'>Non</option>
						<option value='peut-etre'>Eventuellement</option>
					</select></td>
				<tr/>


				<tr>
					<td><span>Commentaire </span></td> 
					<td>
						<textarea rows='5' cols='50' name='comment'></textarea> 
					</td>
				</tr>

			</table>

			<input type='hidden' name='record_id' value='$record_id'/>

				<div id='submit'>
					<h3>Modifier la fiche n° $record_id ?</h3>
					<input type='submit' value='Modifier'/> 
				<div/> 

			</form> "; 


mysqli_close($con); 

?>  
					





						</div>
					</td>
				</tr>
			</table>

	</div> <!-- fin content -->
</body>  
</html>  

