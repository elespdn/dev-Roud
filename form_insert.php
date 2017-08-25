<html> 

	<head> 
		<title>Insert</title>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css">
	</head> 
	
	<body> 

		<div class="menu">
			<h2 id="home"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="#">remplir fiche</a></li>
			</ul>
		</div>

		<div class="content">

			<h1 class="page_title">Remplir fiche</h1>

			<form action='php/hidden_insert.php' method='POST'> 


<?php
require 'php/script_form.php';
?>

				<div id="submit">
					<input type='submit' value='Envoyer'/> 
				<div/> 

			</form> 

		</div>
	</body>  
</html> 