<html>  
	<head>  
		<title>Insert result</title>  
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<body>  

<?php  


// ##---##---## Données de connexion placées dans un fichier externe  
require "connection.php";
mysqli_set_charset($con, "utf8"); // ##---##---## encodage utf8 assuré, pas de probleme avec les accents


// ##---##---## Données reçues du formulaire placées dans des variables, TRIM pour eliminer les espaces blancs avant et apres, STR_REPLACE pour remplacer les apostrophes ' avec '' (sinon, ils ne sont pas bien processés)  
$title = $_POST['title'];
$title = trim($title);
$title = str_replace("'","''",$title);

$archive = $_POST['archive'];
$archive = trim($archive);
$archive = str_replace("'","''",$archive);

$cluster = $_POST['cluster'];
$type = $_POST['type'];
$support = $_POST['support'];
$tool = $_POST['tool'];
$status = $_POST['status'];
$genre = $_POST['genre'];
$dossier = $_POST['dossier'];

$date = $_POST['date'];
$date = trim($date);

$datesource = $_POST['source'];

$publie = $_POST['publie'];
$publie = trim($publie);
$publie = str_replace("'","''",$publie);

$digitize = $_POST['digitize'];

$comment = $_POST['comment'];
$comment = trim($comment);
$comment = str_replace("'","''",$comment);



$sql = "INSERT INTO fiche_texte (titre, cote, ensemble_id, type_id, support_id, instrument_id, statut_id, genre_id, dates_dates, publie, dossier_id, numerise, commentaire) VALUES ('$title', '$archive', '$cluster', '$type', '$support', '$tool', '$status', '$genre', '$date', '$publie', '$dossier', '$digitize', '$comment'); INSERT INTO dates (dates, source) VALUES ('$date', '$datesource')";


// ##---##---## mysqli_multi_query permet de inserer plusieurs requete sql au meme temps
if (mysqli_multi_query($con, $sql)) {


    // ##---##---## Ici on prend l'id de la fiche inserée et le guarde dans une variable
    $record_id = mysqli_insert_id($con);

    // ##---##---## On passe le $last_id avec un formulaire caché, grace à une commande JavaScript, à la page d'affichage de la fiche
    
    /* 
    ##---##---## For DEBUG, comment out this part jusqu'à 'else' et la substituer avec:  ##---##---###
    echo "This is the SQL query: " .$sql;
	*/


    echo "<form id='formulaire_cache' action='record_created.php' method='post'>";
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

