

<?php  


// %%%%%%%%%%%%%%
// Ce file contient le formulaire à remplir pour modifier des données à partir de celles qui sont déjà là pour une entrée spécifique
// %%%%%%%%%%%%%%



// Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // encodage utf8 assuré, pas de probleme avec les accents

$record_id = $_POST['record_id'];



$select2prefill = "SELECT fiche_texte.id, titre, cote, nouvelle_cote, ensemble_id, photocopy, type_id, annotation, addition, support_id, numbered, support_info, instrument_id, color_id, other_tool, statut_id, genre_id, dates, dossier_id, dossierplus, publie, numerise, numerise_info, commentaire, resp_id FROM fiche_texte WHERE fiche_texte.id = '$record_id' ";

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
		$publie_record_id = $row['publie'];
		$numerise_record_id = $row['numerise'];
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
						<legend>Numeroté </legend>";
						
					    echo "<input type='checkbox' name='numbered' value='oui' ". $checked .">";

			echo "	</td>
				</tr> 
				<tr>
					<td><legend>Plus d'info sur le support </legend></td>
					<td colspan='2'>
						<textarea rows='3' cols='50' name='support_info'>". $support_info_record_id ."</textarea> 
					</td>
					<td>
						<span class='suggest'>Suggestions: étendue, quantité de feuillets, recto/verso, taille du cahier, papier particulier (bleu, pelure, de qualité, enveloppe), couleur des pages (si pas blanc), couverture.</span>
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
						<span class='suggest'>S'il s'agit d'une datation, ajouter un ast&#233;risque apr&#232;s une espace, par exemple '1956 *', '1945-06 *'.</span>
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
					<td><legend>Etapes du processus d'écriture </legend></td>
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
					
					
					<td>
						<textarea rows='3' cols='30' name='publie'>". $publie_record_id ."</textarea> 
					</td>
				</tr>   

			</table>


			<hr class='separation_form'/>

			<h2>Numerisation et site web</h2>


			<table class='table_insert'>
				<tr>
					<td><legend>Numériser</legend></td>";

			echo "	<td><select name='digitize'>
							<option value='oui'>Oui</option>
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
				<tr>
					<td>		
						<legend>Notes pour le site </legend>
					</td>
					<td>
						<textarea rows='4' cols='50' name='numerise_info'>". $numerise_info_record_id ."</textarea>
					</td>
				<tr/>
			</table>


			<hr class='separation_form'/>
			<h2>Notes</h2>

			<table class='table_insert'>
				<tr>
					<td><legend>Commentaire </legend></td> 
					<td>
						<textarea rows='5' cols='50' name='comment'>". $commentaire_record_id ."</textarea> 
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