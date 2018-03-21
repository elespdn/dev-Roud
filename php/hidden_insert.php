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
$title = str_replace("'","&rsquo;",$title);

$oldcote = $_POST['oldcote'];
$oldcote = trim($oldcote);
$oldcote = str_replace("'","&rsquo;",$oldcote);

$cote = $_POST['cote'];
$cote = trim($cote);
$cote = str_replace("'","&rsquo;",$cote);

$support_info = $_POST['support_info'];
$support_info = trim($support_info);
$support_info = str_replace("'","&rsquo;",$support_info);

$other_tool = $_POST['other_tool'];
$other_tool = trim($other_tool);
$other_tool = str_replace("'", "&rsquo;", $other_tool);

$numerise_info = $_POST['numerise_info'];
$numerise_info = trim($numerise_info);
$numerise_info = str_replace("'", "&rsquo;", $numerise_info);

$archive = $_POST['archive'];
$cluster = $_POST['cluster'];
$photocopy = $_POST['photocopy'];
$type = $_POST['type'];
$annotation = $_POST['annotation'];
$support = $_POST['support'];
$tool = $_POST['tool'];
$color = $_POST['color'];
$status = $_POST['status'];
$resp = $_POST['resp'];
$alreadydigitized = $_POST['alreadydigitized'];

$date = $_POST['date'];
$date = trim($date);

$biblio = $_POST['biblio'];
$biblio = trim($biblio);


$publie = $_POST['publie'];
$publie = trim($publie);
$publie = str_replace("'","&rsquo;",$publie);

$comment = $_POST['comment'];
$comment = trim($comment);
$comment = str_replace("'","&rsquo;",$comment);


// ##### for OPTIONAL VALUES
/* NOT NEEDED ANYMORE because deleted the table addition, annotation and numbered (and changed the fields in addition_id > addition, annotation_id > annotation, numbered_id > numbered)

Attention to double quotes, otherwise it does not work. In the Sql, there are no quotes corresponding to the optional values, otherwise NULL is not accepted -- because cannot INSERT 'NULL', but only INSERT NULL

if ($annotation != '') {
		$optional_annotation = "$annotation";  
	} else {
		$optional_annotation = 'NULL';
}

same for addition and numbered
*/


$sql = "INSERT INTO fiche_texte (titre, archive_id, oldcote, cote, ensemble_id, type_id, annotation, support_id, support_info, instrument_id, color_id, other_tool, statut_id, dates, biblio_id, publie, alreadydigitized, numerise_info, commentaire, photocopy, resp_id) VALUES ('$title', '$archive', '$oldcote', '$cote', '$cluster', '$type', '$annotation', '$support', '$support_info', '$tool', '$color', '$other_tool', '$status', '$date', '$biblio', '$publie', '$alreadydigitized', '$numerise_info', '$comment', '$photocopy', '$resp')";


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

