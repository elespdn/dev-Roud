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

$record_id = $_POST['record_id'];



$sql = "UPDATE fiche_texte SET titre = '$title', cote='$archive', ensemble_id='$cluster', type_id='$type', support_id='$support', instrument_id='$tool', statut_id='$status', genre_id='$genre', dates_dates='$date', dossier_id='$dossier', publie='$publie', numerise='$digitize', commentaire='$comment' WHERE id='$record_id'";

// ##---##---## mysqli_multi_query permet de inserer plusieurs requete sql au meme temps
if (mysqli_multi_query($con, $sql)) {

    // ##---##---## On passe le $record_id avec un formulaire caché, grace à une commande JavaScript, à la page d'affichage de la fiche. Ici c'est en peu different de insert.php
    
    /* 
    ##---##---## For DEBUG, comment out this part jusqu'à 'else' et la substituer avec:  ##---##---###
    echo "This is the SQL query: " .$sql;
	*/	

    echo "<form id='formulaire_cache' action='record_updated.php' method='post'>";
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

