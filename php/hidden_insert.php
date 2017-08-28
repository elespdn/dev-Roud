<html>  
	<head>  
		<title>Insert result</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<body>  

<?php  


// ##---##---## Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // ##---##---## encodage utf8 assuré, pas de probleme avec les accents


// ##---##---## Données reçues du formulaire placées dans des variables
// Sont les memes que dans update.php, sauf que dans update.php il y a aussi $record_id
// TRIM pour eliminer les espaces blancs avant et apres, STR_REPLACE pour remplacer les apostrophes ' avec '' (sinon, ils ne sont pas bien processés)  
$title = $_POST['title'];
$title = trim($title);
$title = str_replace("'","''",$title);

$archive = $_POST['archive'];
$archive = trim($archive);
$archive = str_replace("'","''",$archive);

$new_archive = $_POST['new_archive'];
$new_archive = trim($new_archive);
$new_archive = str_replace("'","''",$new_archive);

$support_info = $_POST['support_info'];
$support_info = trim($support_info);
$support_info = str_replace("'","''",$support_info);

$other_tool = $_POST['other_tool'];
$other_tool = trim($other_tool);
$other_tool = str_replace("'", "''", $other_tool);

$numerise_info = $_POST['numerise_info'];
$numerise_info = trim($numerise_info);
$numerise_info = str_replace("'", "''", $numerise_info);

$cluster = $_POST['cluster'];
$type = $_POST['type'];
$annotation = $_POST['annotation'];
$addition = $_POST['addition'];
$support = $_POST['support'];
$numbered = $_POST['numbered'];
$tool = $_POST['tool'];
$color = $_POST['color'];
$status = $_POST['status'];
$genre = $_POST['genre'];
$dossier = $_POST['dossier'];

$date = $_POST['date'];
$date = trim($date);

$publie = $_POST['publie'];
$publie = trim($publie);
$publie = str_replace("'","''",$publie);

$digitize = $_POST['digitize'];

$comment = $_POST['comment'];
$comment = trim($comment);
$comment = str_replace("'","''",$comment);


// ##### for OPTIONAL VALUES
// attention to double quotes, otherwise it does not work. In the Sql, there are no quotes corresponding to the optional values, otherwise NULL is not accepted -- because cannot INSERT 'NULL', but only INSERT NULL
if ($annotation != '') {
		$optional_annotation = "$annotation";  
	} else {
		$optional_annotation = 'NULL';
}

if ($addition != '') {
		$optional_addition = "$addition";
	} else {
		$optional_addition = 'NULL';
}

if ($numbered != '') {
		$optional_numbered = "$numbered";
	} else {
		$optional_numbered = 'NULL';
}



$sql = "INSERT INTO fiche_texte (titre, cote, nouvelle_cote, ensemble_id, type_id, annotation_id, addition_id, support_id, numbered_id, support_info, instrument_id, color_id, other_tool, statut_id, genre_id, dates, publie, dossier_id, numerise, numerise_info, commentaire) VALUES ('$title', '$archive', '$new_archive', '$cluster', '$type', $optional_annotation, $optional_addition, '$support', $optional_numbered, '$support_info', '$tool', '$color', '$other_tool', '$status', '$genre', '$date', '$publie', '$dossier', '$digitize', '$numerise_info', '$comment')";


// ##---##---## mysqli_multi_query permet de inserer plusieurs requete sql au meme temps
if (mysqli_multi_query($con, $sql)) {


    // ##---##---## Ici on prend l'id de la fiche inserée et le guarde dans une variable
    $record_id = mysqli_insert_id($con);

    // ##---##---## On passe le $last_id avec un formulaire caché, grace à une commande JavaScript, à la page d'affichage de la fiche
    
    /* 
    ##---##---## For DEBUG, comment out this part jusqu'à 'else' et la substituer avec:  ##---##---###
    echo "This is the SQL query: " .$sql;
	*/


    echo "<form id='formulaire_cache' action='../record_created.php' method='post'>";
	echo "<input type='hidden' name='record_id' value='";
	echo $record_id;
	echo "'>";
	echo "</input>";
	echo "</form>";
	echo "<script>document.getElementById('formulaire_cache').submit()</script>";

	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);

}

 
	



mysqli_close($con); 

?>  

</body>  
</html>  

