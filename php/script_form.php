<?php  

// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents

echo "		<table class='table_insert'>
				<tr>
					<td><legend>Titre </legend></td> 
					<td>
						<textarea rows='1' cols='50' name='title'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='archive'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Ensemble </legend></td>
					<td><select name='cluster'>"; 
						


$sql = "SELECT * FROM ensemble";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['ensemble']. '</option>';
} 

echo "</select></td>
				</tr> 
			</table>


			<hr class='separation_form'/>


			<table class='table_insert'>
				<tr>
					<td>
						<legend>Type de document </legend>
					</td>
					<td>
						<select name='type'>";   					
					
$sql = "SELECT * FROM type";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['type']. '</option>';
} 

echo "					</select>
					</td>
					
					<td>
						<legend>Annoté </legend>";

$sql = "SELECT * FROM annotation";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "					<input type='checkbox' name='annotation' value='". $row['id']."'>";
} 


echo "				</td>
				
					<td><legend>Avec adjonction(s) </legend>";

$sql = "SELECT * FROM addition";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<input type='checkbox' name='addition' value='". $row['id']."'>";
} 


echo "				</td>
				</tr>    

				<tr>
					<td><legend>Support </legend></td>
					<td><select name='support'>";

$sql = "SELECT * FROM support";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['support']. '</option>';
} 

echo "					</select>
					</td>

					<td>
						<legend>Numeroté </legend>";

$sql = "SELECT * FROM numbered";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "					<input type='checkbox' name='numbered' value='". $row['id']."'/>";
} 


echo "				</td>
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='3' cols='50' name='support_info'></textarea> 
					</td>
					<td>
						<span class='suggest'>Suggestions: étendue, quantité de feuillets, recto/verso, papier (si particulier), couleur des pages (si particulier), coverture.</span>
					</td>
				</tr>
			</table>


			<hr class='separation_form'/>


			<table class='table_insert'>
				<tr>
					<td><legend>Instrument d'&#233;criture </legend></td>
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
					<td><legend>Statut g&#233;n&#233;tique </legend></td>
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
					<td><legend>Genre </legend></td>
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
					<td><legend>Date / Datation </legend></td>
				<!-- Aggiungere una casellina per decidere se è Date o Datation, e constraints per inserire la data nel modo giusto con js! -->
					<td>
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*'></input>
						<br/>
						<span class='suggest'>S'il s'agit d'une datation, ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
						<span class='suggest'>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY', '?'. Tous les mots ('avant', 'apr&#232;s', 'vers', etc.) vont apr&#232;s la date, par exemple '1965-04 avant'. Pour les cas particuliers, considerer le commentaire.</span>
  					
  					</td>
				</tr>    

				<tr>
					<td><legend>Dossier </legend></td>
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
					<td><legend>Version publiée </legend></td> 
					<td>
						<textarea rows='1' cols='50' name='publie'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Numeriser </legend></td>
				<!-- numerise, ajouter numero id nelle opzioni dell html -->
					<td><select name='digitize'>
						<option value='oui'>Oui</option>
						<option value='non'>Non</option>
						<option value='peut-etre'>Eventuellement</option>
					</select></td>
				<tr/>


				<tr>
					<td><legend>Commentaire </legend></td> 
					<td>
						<textarea rows='5' cols='50' name='comment'></textarea> 
					</td>
				</tr>

			</table>";


mysqli_close($con); 

?>  