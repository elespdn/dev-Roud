

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
						<textarea class='richtext' rows='5' cols='80' name='support_info'></textarea> 
					</td>
					<td>
						<span class='suggest'> 
							<p>
								<b>Obligatoire.</b>
								<br/>Quand il s'agit de feuillets individuels, indiquer la quantité de feuillets (f. ou ff.).
								<br/>Quand il s'agit d'un cahier, d'un carnet, d'une agenda ou d'une liasse de feuillets avec plusieurs textes, indiquer le feuillet de début et de fin (recto ou verso).
								<br/><b>Exemple</b> : 
								<br/>'2 ff.'
								<br/>'1r-5v'
							</p>
							<p>
								<b>Le cas écheant.</b>
								<br/>Pages arrachées d'une agenda, pages arrachées d'un cahier, papier particulier (bleu, pelure, de qualité), couleur des pages (si pas blanc).
								<br/><b>Exemples</b> : 
								<br/>Dans le cas de deux pages dans un cahier, choisir 'Support : cahier' et 'Info support : 4r-5v'.
								<br/>Dans le cas de deux pages arrachés d'un cahier, choisir 'Support : feuillet' et 'Info support : 2 ff. <br/>Pages de cahier'.
								<br/>Dans le cas d'un feuillet bleu, choisir 'Support : feuillet' et 'Info support: 1 f. <br/>Papier bleu'.
							</p>
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
						<textarea class='richtext' rows='5' cols='80' name='other_tool'></textarea> 
					</td>
					<td>
						<span class='suggest'>Spécifier l'instrument et la couleur des annotations.
						<br/>Utiliser les mêmes termes que dans le menu déroulant au-dessus.
						<br/>Virgule entre l'instrument et la couleur (pas accordée).
						<br/>Quand il y a plusieurs instruments et couleurs, retour à la ligne après chaque. Pas de point ou autre ponctuation à la fin de la ligne ; la ligne suivante commence avec majuscule.
						<br/>Les signes (annotations, mots, etc.) allographes doivent être mentionnés seulement s'ils sont en lien avec le texte de Roud (corrections de Ramuz sur texte de Roud, OUI ; adresse allographe sur le dos d'une enveloppe sur laquelle Roud a écrit, NON). Indiquer entre parenthèses 'annotations allographes' et le nom de la personne si connue.
						<br/>Exemple : 'Annotations au stylo, rouge'<br/>'Plume, noir'<br/>'Plume, noir<br/>Plume, rouge'<br/>'Crayon, violet (annotations allographes Ramuz)'</span>
					</td>
				</tr>


			</table>


			<hr class='separation_form'/>

			<h2>Description du contenu</h2>


			<table class='table_insert'>

				<tr>
					<td><legend>Date</legend></td>
					<td>
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*'></input>
					
						<span class='suggest'>Insérer la date comme elle compare dans le document. 
						<br/>Laisser vide si le document n'a pas de date.
						<br/>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY'. Si le champ devient rouge, ça va pas !
						<br/>Dans le cas où le document a le jour et le mois, mais pas l'année, indiquer '????-MM-DD'. Exemple '????-04-27'.
						<br/>Dans le cas d'une fourchette, indiquer la première date, espace, tiret moyen (ou demi-cadratin), espace, la deuxième date; suivre les indication dessus pour chaque date. Exemple '1945-06-14 – 1950-09-21', '1956 – 1972'.</span>
  					
  					</td>
				</tr>    

				<tr style='padding_bottom:100px'>
					<td><legend>Datation</legend></td>
					<td>
						<select name='datationlist'>";
					

$sql = "SELECT * FROM datationlist";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['datationlist']. '</option>';
} 


echo "	</select>
					
						<input type='text' id='datation' name='datation' pattern='^\d\d\d\d(.)*|^\?(.)*'></input>
					
						<span class='suggest'>La datation établie par le chercheur. 
						<br/>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY'. Si le champ devient rouge, ça va pas !
						<br/>Dans le cas où le document a le jour et le mois, mais pas l'année, indiquer '????-MM-DD'. Ex. '????-04-27'.
						<br/>Dans le cas d'une fourchette, indiquer la première date, espace, tiret moyen (ou demi-cadratin), espace, la deuxième date; suivre les indication dessus pour chaque date. Exemple '1945-06-14 – 1950-09-21', '1956 – 1972'.</span>
  					
  					</td>
				
					<td colspan='2'>
						<textarea rows='5' cols='50' name='datationcomment'></textarea> 
					
						<span class='suggest'>Autres information sur la datation, par exemple datations divergentes.
						<br/>S'il y a des références bibliographique, spécifier l'<a href='biblio.php' target='_blank'>identifiant</a> entre crochets avec le mot Biblio (ex. 'Maggetti [Biblio 451] date le document au 1956, Jaquier [Biblio 367] au 1948' ).</span>
  					
  					</td>
				</tr>   
			</table>

<br/><br/><br/>
		
			<table class='table_insert'>
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
						<span class='suggest'>À remplir quand le texte même du document a donné lieu à une publication (par opposition à une note d'indication ou à un texte sur un texte).
						<br/>Spécifier les pages ou autre info supplementaire. Pas de point à la fin. Les pages sont indiquées avec un 'p', suivis d'un point, d'un espace et des numéros, séparés par un petit trait (ex. 'p. 16', 'p. 24-37'). <br/>Dans le cas de deux ou plus groupes de pages, utiliser 'et' (virgule et 'et' quand plus de deux). Exemple : 'p. 42-44 et 47-48', 'p. 23, 34-45 et 67'.</span>
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
							Donner les termes ou repères qui n'apparaîtraient pas ailleurs dans la fiche et qui doivent néanmoins ressortir dans la recherche.
							<br/>Donner les informations contextuelles sur le support, par exemple 'Au dos d'une traduction de Leisinger', 'À côté de la traduction du <i>Vatican</i>'.
							<br/>S'il y a des références bibliographiques, spécifier seulement entre crochets l'<a href='biblio.php' target='_blank'>identifiant</a> avec le mot Biblio, suivi quand nécessaire par une virgule et les numéros des pages. Les pages sont indiquées avec un 'p', suivis d'un point, d'un espace et des numéros, séparés par un petit trait (ex. 'p. 16', 'p. 24-37'). Dans le cas de deux ou plus groupes de pages, utiliser 'et' (virgule et 'et' quand plus de deux). Exemple : 'p. 42-44 et 47-48', 'p. 23, 34-45 et 67'.
							<br/><b>Exemples</b> :
							<br/>'Repris dans [Biblio 451, p. 42-44].'
							<br/>'Roud à réuni ses poèmes parus dans [Biblio 24].'
							<br/>'Version très proche de celle qui ouvre [Biblio 501].'
							<br/>'En dehors de la première phrase, le texte figure dans [Biblio 304, p. 10].'
							<br/>'Version intermédiaire entre [Biblio 207] et [Biblio 282].'
						</span>
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

				<td>
						<legend>Auteur traduit </legend>
					</td>
					<td>
						<select name='auteurtraduit'>";
					

$sql = "SELECT * FROM auteurtraduit";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{  
echo "<option value='". $row['id']."'>".$row['surname']. '</option>';
} 


echo "					</select>
					</td>

				

			
				<tr>
					<td>		
						<legend>Commentaire interne </legend>
					</td>
					<td>
						<textarea class='richtext' rows='10' cols='100' name='numerise_info'></textarea>
					</td>
					<td style='width:30%'>
						<span class='suggest'>
							Spécifier si un document a une valeur esthétique particulière pour le site. 
							<br/>Ce champ peut être utilisé pour des micro-transcriptions, par exemple dans le cas de quelques mots griffonnés. Dans les transcriptions, utiliser :
								<br/>la barre / pour les retours à la ligne;
								<br/>les soufflets pour les hypothèses (ex. &lt;mot difficilement lisible&gt;);
								<br/>les crochets pour les ajoutes et les mots illisibles (ex. [mot ajouté], [mot ill.], [phrase ill.], [3 mots ill.]);
								<br/>souligner les mots soulignés.
								<br/>S'il y a des références bibliographiques, voir Commentaire.
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
