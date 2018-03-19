
<?php  


// %%%%%%%%%%%%%%
// Ce file contient le formulaire à remplir pour inserer des données
// %%%%%%%%%%%%%%



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
					<td><legend>Nouvelle cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='new_archive'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Ensemble éditorial </legend></td>
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

			<h2>Description materielle</h2>

			<table class='table_insert'>
				
				<tr>
					<td>
						<legend>Photocopie </legend>
						<input type='checkbox' name='photocopy' value='oui'>
					</td>
				</tr>

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
						<legend>Annoté </legend>
						<input type='checkbox' name='annotation' value='oui'>			
					</td>

				
					<td><legend>Avec adjonction(s) </legend>
						<input type='checkbox' name='addition' value='oui'>
					</td>

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
						<legend>Numéroté </legend>
						<input type='checkbox' name='numbered' value='oui'>
					</td>
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='3' cols='50' name='support_info'></textarea> 
					</td>
					<td>
						<span class='suggest'>Indications : 
						<ul>
							<li>Obligatoire. Indiquer la quantité, f. ou ff.</li>
							<li>Ex. : 2 ff.</li>
							<li>Le cas écheant. Papier particulier (bleu, pelure, de qualité, page d'agenda, page de cahier), couleur des pages (si pas blanc).</li>
							<li>Ex. : Dans le cas de deux pages dans un cahier, choisir Support: cahier et spécifier l'étendue dans Info support : 2 ff.<br/>Dans le cas de deux pages arrachés, choisir Support : feuillet et spécifier l'étendue dans Info support : 2 f. r/v. Page de cahier (à la ligne).</li>
						</ul>
						</span>
					</td>
				</tr>

				<tr>
					<td><legend>Instrument d'&#233;criture </legend></td>
					<td>
						<select name='tool'>";
				

$sql = "SELECT * FROM instrument";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['instrument']. '</option>';
} 

echo "					</select>
					&emsp;&emsp;&emsp;&emsp;&emsp;
					
						<select name='color'>";
				

$sql = "SELECT * FROM color";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['color']. '</option>';
} 

echo "					</select>
					</td>
				</tr>

				<tr>
					<td><legend>Autre(s) instrument(s) d'écriture </legend></td>
					<td colspan='2'>
						<textarea rows='3' cols='50' name='other_tool'></textarea> 
					</td>
					<td>
						<span class='suggest'>Indications : spécifier l'instrument et la couleur des annotations(utiliser les mêmes termes que dans le menu déroulant au-dessus). Ex. : annotations au stylo rouge.</span>
					</td>
				</tr>


			</table>


			<hr class='separation_form'/>

			<h2>Identification du texte</h2>


			<table class='table_insert'>

				<tr>
					<td><legend>Date / Datation </legend></td>
				<!-- Aggiungere una casellina per decidere se è Date o Datation, e constraints per inserire la data nel modo giusto con js! -->
					<td>
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*'></input>
					</td>
					<td>
						<span class='suggest'>S'il n'y a pas de date, ne rien écrire (pas de point d'interrogation). 
						 S'il s'agit d'une datation (pas de date dans le document original), ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
						<span class='suggest'>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY'. Tous les mots ('avant', 'apr&#232;s', 'vers', etc.) vont apr&#232;s la date (avec virgule), par exemple '1965-04, avant'. Pour les cas particuliers, considerer le commentaire.</span>
  					
  					</td>
				</tr>    

				<tr>
					<td><legend>Genre </legend></td>
					<td><select name='genre'>"; 

$sql = "SELECT * FROM genre";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['genre']. '</option>';
} 


echo "</select></td>
				</tr>
				

				<tr>
					<td><legend>Dossier </legend></td>
					<td><select name='dossier'>";
					

$sql = "SELECT * FROM dossier";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['dossier']. '</option>';
} 

echo "</select></td>
					<td>
						<textarea rows='2' cols='50' name='dossierplus'></textarea>
					</td>
				</tr>


				<tr>
					<td><legend>Étapes du processus d'écriture </legend></td>
					<td><select name='status'>";
					

$sql = "SELECT * FROM statut";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['statut']. '</option>';
} 


echo "	</select></td>
				</tr>

				<tr>
					<td><legend>Version publiée </legend></td> 
					
					<td><p class='suggest'>Insérer le numéro de l'<a href='biblio.php' target='_blank'>entrée bibliographique</a>.</p> 
						<textarea rows='1' cols='10' name='biblio'></textarea> 
					</td>
					<td>
						<p class='suggest'>Spécifier les pages ou autre reférence bibliographique. Pas de point à la fin. Les pages sont indiquées avec un ou deux 'p', suivis d'un point, d'un espace et des numéros, séparés par un petit trait (ex. 'p. 16', 'pp. 24-37').</p>
						<textarea rows='3' cols='30' name='publie'></textarea> 
					</td>
				</tr>   

			</table>


			<hr class='separation_form'/>

			<h2>Numerisation et site web</h2>


			<table class='table_insert'>
				<tr>
					<td><legend>Déjà numérisé </legend></td>
					<td>
						<input type='checkbox' name='alreadydigitized' value='oui'>
					</td>
				</tr>
				<tr>
					<td><legend>À numériser </legend></td>
					<td><select name='digitize'>
							<option value=''></option>
							<option value='oui'>Oui</option>
							<option value='non'>Non</option>
							<option value='eventuellement'>Éventuellement</option>
						</select>
					</td>
				</tr>				
			</table>


			<hr class='separation_form'/>
			<h2>Notes</h2>

			<table class='table_insert'>
				<tr>
					<td><legend>Commentaire </legend></td> 
					<td>
						<textarea rows='5' cols='50' name='comment'></textarea> 
					</td>
					<td>
						<p class='suggest'>Suggestions (valables aussi pour les autres champs de texte): les titres, incipit et noms de revues à rendre en italique sont encodés avec la balise &lt;i&gt; (ex. &lt;i&gt;Campagne perdue&lt;/i&gt;). Attention: la balise fermante a une barre.</p>
						<p class='suggest'>Pour les titres d'articles, d'ouvrages collectifs et des documents (manuscrits originals ou autres) et pour les citations, utiliser les chevrons « ... » (il est possible de les copier-coller d'ici).</p>
						<p class='suggest'>S'il y a des références bibliographique, spécifier l'<a href='biblio.php' target='_blank'>identifiant</a> entre crochet avec le mot Biblio (ex. [Biblio 451]).</p>
						<p class='suggest'>Dans les transcriptions, utiliser 
							<ul class='suggest'>
								<li>la barre / pour les retours à la ligne;</li> 
								<li>les soufflets pour les hypothèses (ex. &lt;mot difficilement lisible&gt;);</li> 
								<li>les crochets pour les ajoutes et les mots illisibles (ex. [mot ajouté], [mot ill.], [phrase ill.], [3 mots ill.]);</li> 
								<li>la balise &lt;u&gt; pour les mots soulignés (ex. &lt;u&gt;mot souligné&lt;/u&gt;). Attention: la balise fermante a une barre.</li>
							</ul>
						</p>
					</td>
				</tr>

				<tr>
					<td>		
						<legend>Cuisine interne </legend>
					</td>
					<td>
						<textarea rows='4' cols='50' name='numerise_info'></textarea>
					</td>
				</tr>

				<tr>
					<td>
						<legend>Responsable </legend>
					</td>
					<td>
						<select name='resp'>";
					

$sql = "SELECT * FROM resp";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['resp']. '</option>';
} 


echo "					</select>
					</td>
				</tr>

			</table>";


mysqli_close($con); 

?>  