

<?php  


// %%%%%%%%%%%%%%
// Ce file contient le formulaire à remplir pour modifier des données à partir de celles qui sont déjà là pour une entrée spécifique
// %%%%%%%%%%%%%%



// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents

$record_id = $_POST['record_id'];



$select2prefill = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble_id, photocopy, type_id, annotation, addition, support_id, numbered, support_info, instrument_id, color_id, other_tool, statut_id, genre_id, dates, dossier_id, dossierplus, biblio.type as bibliotype, biblio.creator, biblio.title, biblio.title_pub, biblio.number, biblio.publisher, biblio.date, biblio.id as biblioid, publie, alreadydigitized, numerise, numerise_info, commentaire, resp_id FROM fiche_texte LEFT JOIN biblio ON fiche_texte.biblio_id = biblio.id WHERE fiche_texte.id = '$record_id' ";

$query = mysqli_query($con, $select2prefill) or die ("impossible de VISUALISER Les données");  
while ($row = mysqli_fetch_array($query)) 
	{

		$id_record_id = $row['id'];
		$titre_record_id = $row['titre'];
		$cote_record_id = $row['cote'];
		$nouvelle_cote_record_id = $row['nouvelle_cote'];
		$ensemble_record_id = $row['ensemble_id'];
		$photocopy_record_id = $row['photocopy'];
		$type_record_id = $row['type_id'];
		$annotation_record_id = $row['annotation'];
		$addition_record_id = $row['addition'];
		$support_record_id = $row['support_id'];
		$numbered_record_id = $row['numbered'];
		$support_info_record_id = $row['support_info'];
		$instrument_record_id = $row['instrument_id'];
		$color_record_id = $row['color_id'];
		$other_tool_record_id = $row['other_tool'];
		$dates_record_id = $row['dates'];
		$genre_record_id = $row['genre_id'];
		$dossier_record_id = $row['dossier_id'];
		$dossierplus_record_id = $row['dossierplus'];
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
		$numerise_record_id = $row['numerise'];
		$alreadydigitized_record_id = $row['alreadydigitized'];
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
				</tr>    

				<tr>
					<td><legend>Cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='archive'>". $cote_record_id ."</textarea> 
					</td>
				</tr>    

				<tr>
					<td><legend>Nouvelle cote </legend></td>
					<td>
						<textarea rows='1' cols='50' name='new_archive'>".$nouvelle_cote_record_id ."</textarea> 
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

				
					<td><legend>Avec adjonction(s) </legend>
						<legend>Annoté </legend>";
						if ($addition_record_id=='oui') { 
            				$checked = 'checked';  
					        }
					    else {		
					            $checked = '';			
					    }
					    echo "<input type='checkbox' name='addition' value='oui' ". $checked .">";
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

					<td>
						<legend>Numéroté </legend>";
						
					    echo "<input type='checkbox' name='numbered' value='oui' ". $checked .">";

			echo "	</td>
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='3' cols='50' name='support_info'>". $support_info_record_id ."</textarea> 
					</td>
					<td>
						<span class='suggest'>Suggestions: 
						<ul>
							<li>étendue, quantité de feuillets et recto/verso où nécessaire. Indiquer la quantité, f. ou ff. et recto/verso, sans virgule au milieu. Ex. 1 f. recto, 15 ff. recto/verso;</li>
							<li>taille du cahier, papier particulier (bleu, pelure, de qualité, enveloppe), couleur des pages (si pas blanc), couverture.</li>
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
						<textarea rows='3' cols='50' name='other_tool'>". $other_tool_record_id ."</textarea> 
					</td>
					<td>
						<span class='suggest'>Suggestions : spécifier si l'instrument a été utilisé pour des annotations ou adjonctions ; utiliser les mêmes termes que dans l'onglet au-dessus (crayon, machine à écrire, etc.).</span>
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
						<input type='text' id='date' name='date' pattern='^\d\d\d\d(.)*|^\?(.)*' value='". $dates_record_id ."'></input>
					</td>
					<td>
						<span class='suggest'>S'il n'y a pas de date, ne rien écrire (pas de point d'interrogation). 
						 S'il s'agit d'une datation (pas de date dans le document original), ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
						<span class='suggest'>Valeurs accept&#233;s : 'YYYY-MM-DD', 'YYYY-MM', 'YYYY', '?'. Tous les mots ('avant', 'apr&#232;s', 'vers', etc.) vont apr&#232;s la date (avec virgule), par exemple '1965-04, avant'. Pour les cas particuliers, considerer le commentaire.</span>
  					
  					</td>
				</tr>    

				<tr>
					<td><legend>Genre </legend></td>
					<td><select name='genre'>"; 

$sql = "SELECT * FROM genre";
$query = mysqli_query($con, $sql) or die ("impossible de sélectionner des données");  
while ($row = mysqli_fetch_array($query)) 
	{	
	// see ensemble for more comments explaining this if
	if ($row['id']==$genre_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['genre']. '</option>'; 
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
	// see ensemble for more comments explaining this if
	if ($row['id']==$dossier_record_id) { 
            $selected = 'selected="selected"';  
        }
        else {		
            $selected = '';			
        }
        echo "<option value='". $row['id']."' ". $selected .">".$row['dossier']. '</option>'; 
	} 

echo "</select></td>
					<td>
						<textarea rows='2' cols='50' name='dossierplus'>". $dossierplus_record_id ."</textarea>
					</td>
				</tr>


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

			<h2>Numerisation et site web</h2>


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
					<td><legend>À numériser</legend></td>";

			echo "	<td><select name='digitize'>
							<option value=''></option>
							<option value='oui' ";
							if ($numerise_record_id=='oui') {
								echo "selected";
							}

							echo ">Oui</option>
							<option value='non' ";
							if ($numerise_record_id=='non') {
								echo "selected";
							}

							echo ">Non</option>
							<option value='eventuellement' ";
							if ($numerise_record_id=='eventuellement') {
								echo "selected";
							}

							echo ">Eventuellement</option>
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
						<textarea rows='5' cols='50' name='comment'>". $commentaire_record_id ."</textarea> 
					</td>
					<td>
						<p class='suggest'>Suggestions (valables aussi pour les autres champs de texte): les titres, incipit et noms de revues à rendre en italique sont encodés avec la balise &lt;i&gt; (ex. &lt;i&gt;Campagne perdue&lt;/i&gt;). Attention: la balise fermante a une barre.</p>
						<p class='suggest'>Pour les titres d'articles, d'ouvrages collectifs  et des documents (manuscrits originals ou autres) et pour les citations, utiliser les chevrons « ... » (il est possible de les copier-coller d'ici).</p>
						<p class='suggest'>S'il y a des références bibliographique, spécifier l'<a href='biblio.php' target='_blank'>identifiant</a> entre crochet avec le mot Biblio (ex. [Biblio 451]).</p>
						<p class='suggest'>Dans les transcriptions, utiliser 
							<ul class='suggest'>
								<li>la barre / pour les retours à la ligne;</li> 
								<li>les soufflets pour les hypothèses (ex. &lt;mot difficilement lisible&gt;);</li> 
								<li>les crochets pour les ajoutes et les mots illisibles (ex. [mot ajouté], [mot ill.], [phrase ill.], [3 mots ill.])</li> 
								<li>la balise &lt;u&gt; pour les mots soulignés (ex. &lt;u&gt;mot souligné&lt;/u&gt;). Attention: la balise fermante a une barre.</li>
							</ul>
						</p>
						<p class='suggest'>Terminer avec un point.</p>
					</td>
				</tr>
				<tr>
					<td>		
						<legend>Cuisine interne </legend>
					</td>
					<td>
						<textarea rows='4' cols='50' name='numerise_info'>". $numerise_info_record_id ."</textarea>
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