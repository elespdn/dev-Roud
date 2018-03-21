

<?php   


// %%%%%%%%%%%%%%
// Ce file contient le formulaire à remplir pour inserer des données
// %%%%%%%%%%%%%%



// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents

echo "		<table class='table_insert'>
				<tr>
					<td><legend>Titre</legend></td> 
					<td>
						<textarea rows='1' cols='50' name='title'></textarea> 
					</td>
					<td>
						<span class='suggest'>Pas de guillemets, pas d’italique. Les titres-incipit sont donnés entre crochets, avec trois points à la fin (alt + .).</span>

					</td>
				</tr>   

				<tr>
					<td><legend>Fonds </legend></td>
					<td><select name='archive'>"; 
						


$sql = "SELECT * FROM archive";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['archive']. '</option>';
} 

echo "</select></td>
				<td>
					<span class='suggest'>La liste des fonds n'est pas complète. Écrire à Elena pour ajouter un fonds à la liste (c'est rapide).</span>
				</td>
				</tr> 

<tr>
					<td><legend>Cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='cote'></textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Ancienne cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='oldcote'></textarea> 
					</td>
					<td>
					<span class='suggest'>Seulement pour CRLR GR et pas obligatoirement non plus.</span>
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

					
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='5' cols='80' name='support_info'></textarea> 
					</td>
					<td>
						<span class='suggest'> 
							Obligatoire : indiquer la quantité, f. ou ff.</li>
							<br/><b>Exemple</b> : 2 ff.
							<br/>Le cas écheant : pages arrachées d'une agenda, pages arrachées d'un cahier, papier particulier (bleu, pelure, de qualité), couleur des pages (si pas blanc).
							<br/><b>Exemples</b> : 
							<br/>Dans le cas de deux pages dans un cahier, choisir 'Support : cahier' et 'Info support : 2 ff'.
							<br/>Dans le cas de deux pages arrachés d'un cahier, choisir 'Support : feuillet' et 'Info support : 2 ff. Pages de cahier'.
							<br/>Dans le cas d'un feuillet bleu, choisir 'Support : feuillet' et 'Info support: 1 f. Bleu'.
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
						<textarea rows='5' cols='80' name='other_tool'></textarea> 
					</td>
					<td>
						<span class='suggest'>Spécifier l'instrument et la couleur des annotations (utiliser les mêmes termes que dans le menu déroulant au-dessus). Exemple : 'annotations au stylo rouge'.</span>
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
					<td><legend>Étapes du processus d'écriture </legend></td>
					<td><select name='status'>";
					

$sql = "SELECT * FROM statut ORDER BY orderformenu";
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

			<h2>Commentaire</h2>

			<table class='table_insert'>
				<tr>
					<td><legend>Commentaire </legend></td> 
					<td>
						<textarea class='richtext' rows='10' cols='100' name='comment'></textarea> 
					</td>
					<td style='width:30%'>
						<span class='suggest'>
						<br/>Attention ! Avant de remplir, fermer l'affiche jaune 'This domain is not registered'.
						<br/>Donner les termes ou repères qui n'apparaîtraient pas ailleurs dans la fiche et qui doivent néanmoins ressortir dans la recherche.
						<br/>Donner les informations contextuelles sur le support, par exemple 'Au dos d'une traduction de Leisinger', 'À côté de la traduction du <i>Vatican</i>'.
						<br/>S'il y a des références bibliographique, spécifier l'<a href='biblio.php' target='_blank'>identifiant</a> entre crochets avec le mot Biblio (ex. 'comme expliqué dans [Biblio 451], Roud marche toute la nuit' ).
						</p>
					</td>
				</tr>
			</table>
			


			<hr class='separation_form'/>
			<h2>Cuisine interne</h2>

			<table class='table_insert'>

				<tr>
					<td><legend>Déjà numérisé </legend></td>
					<td>
						<input type='checkbox' name='alreadydigitized' value='oui'>
					</td>
				</tr>

				

			
				<tr>
					<td>		
						<legend>Commentaire interne </legend>
					</td>
					<td>
						<textarea class='richtext' rows='10' cols='100' name='numerise_info'></textarea>
					</td>
					<td style='width:30%'>
						<span class='suggest'>
							<br/>Attention ! Avant de remplir, fermer l'affiche jaune 'This domain is not registered'.
							<br/>Spécifier si un document a une valeur esthétique particulière pour le site. 
							<br/>Ce champ peut être utilisé pour des micro-transcriptions, par exemple dans le cas de quelques mots griffonnés. Dans les transcriptions, utiliser :
								<br/>la barre / pour les retours à la ligne;
								<br/>les soufflets pour les hypothèses (ex. &lt;mot difficilement lisible&gt;);
								<br/>les crochets pour les ajoutes et les mots illisibles (ex. [mot ajouté], [mot ill.], [phrase ill.], [3 mots ill.]);
								<br/>souligner les mots soulignés.
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<legend>Responsable </legend>
					</td>
					<td>
						<select name='resp'>";
					

$sql = "SELECT * FROM resp ORDER BY orderformenu";
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
