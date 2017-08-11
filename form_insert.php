<html> 

	<head> 
		<title>Insert</title>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css">
	</head> 
	
	<body> 

		<div class="menu">
			<h2 id="home"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="#">remplir fiche</a></li>
			</ul>
		</div>

		<div class="content">

			<h3>Remplir fiche</h3>

			<form action='insert.php' method='POST'> 



			<table id="table_insert">
				<tr>
					<td><span>Titre </span></td> 
					<td>
						<textarea rows="1" cols="80" name='title'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Cote </span></td>
					<td>
						<textarea rows="1" cols="50" name='archive'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Ensemble </span></td>
					<td><select name="cluster">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM ensemble";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['ensemble']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>    

				<tr>
					<td><span>Type de document </span></td>
					<td><select name="type">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM type";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['type']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>    

				<tr>
					<td><span>Support </span></td>
					<td><select name="support">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM support";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['support']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>    

				<tr>
					<td><span>Instrument d'&#233;criture </span></td>
					<td><select name="tool">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM instrument";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['instrument']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>

				<tr>
					<td><span>Statut g&#233;n&#233;tique </span></td>
					<td><select name="status">
						<option> </option>
	<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM statut";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['statut']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>


				<tr>
					<td><span>Genre </span></td>
					<td><select name="genre">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM genre";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['genre']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>


				<tr>
					<td><span>Date / Datation </span></td>
				<!-- Aggiungere una casellina per decidere se è Date o Datation, e constraints per inserire la data nel modo giusto con js! -->
					<td>
						<input type="text" id="date" name="date" pattern="^\d\d\d\d(.)*|^\?(.)*"></input>
						<br/>
						<span class="suggest">S'il s'agit d'une datation, ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
						<span class="suggest">Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY', '?'. Tous les mots ('avant', 'apr&#232;s', 'vers', etc.) vont apr&#232;s la date, par exemple '1965-04 avant'. Pour les cas particuliers, considerer le commentaire.</span>

						<!-- <br/>
						<span>Date present dans le ms?</span>
						<select name="source">
  							<option value="1">Oui</option>
  							<option value="2">Non</option>
  						</select> -->
  					
  					</td>
				</tr>    

				<tr>
					<td><span>Dossier </span></td>
					<td><select name="dossier">
						<option> </option>
<?php
require 'connection.php';
mysqli_set_charset($con, "utf8");  // encodage utf8 assuré, pas de probleme avec les accents
$sql = "SELECT * FROM dossier";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['dossier']. '</option>';
} 
mysqli_close($con); 
?> 
					</select></td>
				</tr>



				<tr>
					<td><span>Version publiée </span></td> 
					<td>
						<textarea rows="1" cols="80" name='publie'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><span>Numeriser </span></td>
				<!-- numerise, ajouter numero id nelle opzioni dell html -->
					<td><select name="digitize">
						<option value="oui">Oui</option>
						<option value="non">Non</option>
						<option value="peut-etre">Eventuellement</option>
					</select></td>
				<tr/>


				<tr>
					<td><span>Commentaire </span></td> 
					<td>
						<textarea rows="5" cols="80" name='comment'></textarea> 
					</td>
				</tr>

			</table>

				<div id="submit">
					<input type='submit' value='Envoyer'/> 
				<div/> 

			</form> 

		</div>
	</body>  
</html> 