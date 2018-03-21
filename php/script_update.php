

<?php  


// %%%%%%%%%%%%%%
// Ce file contient le formulaire à remplir pour modifier des données à partir de celles qui sont déjà là pour une entrée spécifique
// %%%%%%%%%%%%%%



// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents

$record_id = $_POST['record_id'];



$select2prefill = "SELECT fiche_texte.id, titre, archive_id, oldcote, cote, ensemble_id, photocopy, type_id, annotation, support_id, support_info, instrument_id, color_id, other_tool, statut_id, dates, datationlist_id, datation, datationcomment, biblio.type as bibliotype, biblio.creator, biblio.title, biblio.title_pub, biblio.number, biblio.publisher, biblio.date, biblio.id as biblioid, publie, alreadydigitized, ocrtranscribed, auteurtraduit_id, numerise_info, commentaire, resp_id FROM fiche_texte LEFT JOIN biblio ON fiche_texte.biblio_id = biblio.id WHERE fiche_texte.id = '$record_id' ";

$query = mysqli_query($con, $select2prefill) or die ("impossible de VISUALISER Les données");  
while ($row = mysqli_fetch_array($query)) 
	{

		$id_record_id = $row['id'];
		$titre_record_id = $row['titre'];
		$archive_record_id = $row['archive'];
		$oldcote_record_id = $row['oldcote'];
		$cote_record_id = $row['cote'];
		$ensemble_record_id = $row['ensemble_id'];
		$photocopy_record_id = $row['photocopy'];
		$type_record_id = $row['type_id'];
		$annotation_record_id = $row['annotation'];
		$addition_record_id = $row['addition'];
		$support_record_id = $row['support_id'];
		$support_info_record_id = $row['support_info'];
		$instrument_record_id = $row['instrument_id'];
		$color_record_id = $row['color_id'];
		$other_tool_record_id = $row['other_tool'];
		$dates_record_id = $row['dates'];
		$datationlist_record_id = $row['datationlist_id'];
		$datation_record_id = $row['datation'];
		$datationcomment_record_id = $row['datationcomment'];
		$statut_record_id = $row['statut_id'];
		$bibliotype_record_id = $row['bibliotype'];
		$bibliocreator_record_id = $row['creator'];
		$bibliotitle_record_id = $row['title'];
		$bibliotitlepub_record_id = $row['title_pub'];
		$biblionumber_record_id = $row['number'];
		$bibliopublisher_record_id = $row['publisher'];
		$bibliodate_record_id = $row['date'];
		$biblioid_record_id = $row['biblioid'];
		$publie_record_id = $row['publie'];
		$alreadydigitized_record_id = $row['alreadydigitized'];
		$ocrtranscribed_record_id = $row['ocrtranscribed'];
		$auteurtraduit_record_id = $row['auteurtraduit_id'];
		$numerise_info_record_id = $row['numerise_info'];
		$commentaire_record_id = $row['commentaire'];
		$resp_record_id = $row['resp_id'];
	}

// %%%%%%%%% echo table same as form_insert.php, plus variables from the results of the query $select2prefill above

echo "		<table class='table_insert'>
				<tr>
					<td><legend>Titre </legend></td> 
					<td>
						<textarea rows='1' cols='50' name='title'>". $titre_record_id ."</textarea> 
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
						<textarea rows='1' cols='50' name='cote'>".$cote_record_id ."</textarea> 
					</td>
				</tr>  

				<tr>
					<td><legend>Ancienne cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='oldcote'>". $oldcote_record_id ."</textarea> 
					</td>
					<td>
						<span class='suggest'>Seulement pour CRLR GR et pas obligatoirement non plus.</span>
					</td>
				</tr>    

				<tr>
					<td><legend>Ensemble éditorial</legend></td>
					<td><select name='cluster'>"; 


$sql = "SELECT * FROM ensemble";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
	{	
	// if the ID from the array is the same to $ensemble_record_id (from query $select2prefill)
	if ($row['id']==$ensemble_record_id) {  		

			// add attribute 'selected' (using variable $selected)
            $selected = 'selected="selected"';  
        }
        else {	

        	// otherwise do not add anything (variable $selected is empty)				
            $selected = '';			
        }   

        // normal array, plus the variable $selected, which gives a different output following what defined above
        echo "<option value='". $row['id']."' ". $selected .">".$row['ensemble']. '</option>'; 
	} 

echo "</select></td>
				</tr> 
			</table>


			<hr class='separation_form'/>

			<h2>Description materielle</h2>

			<table class='table_insert'>
				
				<tr>
					<td>
						<legend>Photocopie</legend>";
						if ($photocopy_record_id=='oui') { 
            				$checked = 'checked';  
					        }
					    else {		
					            $checked = '';			
					    }
					    echo "<input type='checkbox' name='photocopy' value='oui' ". $checked .">"; 

				echo "	
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
	// see ensemble for more comments explaining this if
	if ($row['id']==$type_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['type']. '</option>'; 
	} 

echo "					</select>
					</td>
					
					<td>
						<legend>Annoté </legend>";
						if ($annotation_record_id=='oui') { 
            				$checked = 'checked';  
					        }
					    else {		
					            $checked = '';			
					    }
					    echo "<input type='checkbox' name='annotation' value='oui' ". $checked .">";

			echo "	</td>

				
					
				</tr>    


				<tr>
					<td><legend>Support </legend></td>
					<td><select name='support'>";

$sql = "SELECT * FROM support";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
	{	
	// see ensemble for more comments explaining this if
	if ($row['id']==$support_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['support']. '</option>'; 
	} 
 

echo "					</select>
					</td>

					
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='6' cols='50' name='support_info'>". $support_info_record_id ."</textarea> 
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
	// see ensemble for more comments explaining this if
	if ($row['id']==$instrument_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['instrument']. '</option>'; 
	} 

echo "					</select>
					&emsp;&emsp;&emsp;&emsp;&emsp;
					
						<select name='color'>";
				

$sql = "SELECT * FROM color";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
	{	
	// see ensemble for more comments explaining this if
	if ($row['id']==$color_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['color']. '</option>'; 
	} 

echo "					</select>
					</td>
				</tr>

				<tr>
					<td><legend>Autre(s) instrument(s) d'écriture </legend></td>
					<td colspan='2'>
						<textarea rows='6' cols='50' name='other_tool'>". $other_tool_record_id ."</textarea> 
					</td>
					<td>
						<span class='suggest'>Spécifier l'instrument et la couleur des annotations (utiliser les mêmes termes que dans le menu déroulant au-dessus). Exemple : 'annotations au stylo rouge'.</span>
					</td>
				</tr>


			</table>


			<hr class='separation_form'/>

			<h2>Description du contenu</h2>


			<table class='table_insert'>

				<tr>
					<td><legend>Date</legend></td>
					<td>
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*' value='". $dates_record_id ."'></input>
					<span class='suggest'>Insérer la date comme elle compare dans le document. <br/>Laisser vide si le document n'a pas de date.
						<br/>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY'. Si le champ devient rouge, ça va pas !
						<br/>Dans le cas où le document a le jour et le mois, mais pas l'année, indiquer '????-MM-DD'. Ex. '????-04-27'.</span></td>
				</tr>    

				<tr style='padding_bottom:100px'>
					<td><legend>Datation</legend></td>
					<td>
						<select name='datationlist'>";
					

$sql = "SELECT * FROM datationlist";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
{	
	// see ensemble for more comments explaining this if
	if ($row['id']==$datationlist_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['datationlist']. '</option>'; 
	} 


echo "	</select>

				<input type='text' id='datation' name='datation' pattern='^\d\d\d\d(.)*|^\?(.)*' value='". $datation_record_id ."'></input>
					
						<span class='suggest'>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY'. Si le champ devient rouge, ça va pas !</span>
  					
  					</td>

  					<td colspan='2'>
						<textarea rows='5' cols='50' name='datationcomment'>". $datationcomment_record_id ."</textarea> 
					
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
					

$sql = "SELECT * FROM statut";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
	{	
	// see ensemble for more comments explaining this if
	if ($row['id']==$statut_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['statut']. '</option>'; 
	} 


echo "	</select></td>
				</tr>

				<tr>
					<td><legend>Version publiée </legend></td> 
					
					<td><p class='suggest'>Insérer le numéro de l'<a href='biblio.php' target='_blank'>entrée bibliographique</a>.</p> 
						<textarea rows='1' cols='10' name='biblio'>". $biblioid_record_id ."</textarea> 
					<br/>";


					if ($bibliocreator_record_id != '') {
						echo $bibliocreator_record_id;
					} 
					if ($bibliotype_record_id != '') {
						if ($bibliotype_record_id != 'Article') {
						echo ",&nbsp;<i>";
						echo $bibliotype_record_id;
						echo "</i>";
						} else {
							echo ",&nbsp;'";
							echo $bibliotype_record_id;
							echo "'";			
						}
					}						
					if ($bibliotitlepub_record_id != '') {
						echo ",&nbsp;<i>";
						echo $bibliotitlepub_record_id;
						echo "</i>";
					} 
					if ($biblionumber_record_id != '') {
						echo ",&nbsp;";
						echo $biblionumber_record_id;
					} 
					if ($bibliopublisher_record_id != '') {
						echo ",&nbsp;";
						echo $bibliopublisher_record_id;
					} 
					if ($bibliodate_record_id != '') {
						echo ",&nbsp;";
						echo $bibliodate_record_id;
					}

					if ($biblioid_record_id != '') {
						echo ". [Biblio&nbsp;";
						echo $biblioid_record_id;
						echo "]";
					}
						

					echo "
					</td>
					
					<td>
						<p class='suggest'>Spécifier les pages ou autre reférence bibliographique. Pas de point à la fin. Les pages sont indiquées avec un ou deux 'p', suivis d'un point, d'un espace et des numéros, séparés par un petit trait (ex. 'p. 16', 'pp. 24-37').</p>
						<textarea rows='3' cols='30' name='publie'>". $publie_record_id ."</textarea>
					</td>
				</tr>   

			</table>


			<hr class='separation_form'/>

			<h2>Commentaire</h2>

			<table class='table_insert'>
				<tr>
					<td><legend>Commentaire </legend></td> 
					<td>
						<textarea class='richtext' rows='10' cols='100' name='comment'>". $commentaire_record_id ."</textarea> 
					</td>
					<td style='width:30%'>
						<span class='suggest'>
						<br/>Attention ! Avant de modifier, fermer le message jaune 'This domain is not registered'.
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
					<td>";

						if ($alreadydigitized_record_id=='oui') { 
            				$checked = 'checked';  
					        }
					    else {		
					            $checked = '';			
					    }
					    echo "<input type='checkbox' name='alreadydigitized' value='oui' ". $checked .">";
					    echo "
					</td>
				</tr>



				<tr>
					<td><legend>Déjà rétranscrit ou OCRizé </legend></td>
					<td>";

						if ($ocrtranscribed_record_id=='oui') { 
            				$checked = 'checked';  
					        }
					    else {		
					            $checked = '';			
					    }
					    echo "<input type='checkbox' name='ocrtranscribed' value='oui' ". $checked .">";
					    echo "
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
	// see ensemble for more comments explaining this if
	if ($row['id']==$auteurtraduit_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['surname']. '</option>'; 
	} 


echo "					</select>
					</td>


			
				<tr>
					<td>		
						<legend>Commentaire interne </legend>
					</td>
					<td>
						<textarea class='richtext' rows='10' cols='100' name='numerise_info'>". $numerise_info_record_id ."</textarea>
					</td>
					<td style='width:30%'>
						<span class='suggest'>
							<br/>Attention ! Avant de modifier, fermer le message jaune 'This domain is not registered'.
							<br/>Spécifier si un document a une valeur esthétique particulière pour le site. 
							<br/>Ce champ peut être utilisé pour des micro-transcriptions, par exemple dans le cas de quelques mots griffonnés. Dans les transcriptions, utiliser :
								<br/>la barre / pour les retours à la ligne;
								<br/>les soufflets pour les hypothèses (ex. &lt;mot difficilement lisible&gt;);
								<br/>les crochets pour les ajoutes et les mots illisibles (ex. [mot ajouté], [mot ill.], [phrase ill.], [3 mots ill.]);
								<br/>souligner les mots soulignés.
						</span>
					</td>
				<tr/>

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
	// see ensemble for more comments explaining this if
	if ($row['id']==$resp_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['resp']. '</option>'; 
	} 


echo "					</select>
					</td>
				</tr>

			</table>";






mysqli_close($con); 

?>  