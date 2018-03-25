<html> 

	<head> 
		<title>Insert</title>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/general.css">

		<!-- locale non funziona, non so perché
		<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
	-->
		<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> 
		 <script type="text/javascript">
  tinymce.init({
    selector: 'textarea.richtext' ,
    toolbar : 'undo redo | bold italic underline | cut copy paste' ,
	branding : false ,
	menubar : false
  });
  </script>
	</head> 
	
	<body> 

		<div class="menu">
			<h2 id="home"><a href=".">Fonds</a></h2>
			<ul>
				<li><a href="search.php">recherche</a></li>|
				<li><a href="#">remplir fiche</a></li>|
				<li><a href="biblio.php">bibliographie</a></li>
			</ul>
		</div>

		<div class="content">

			<h1 class="page_title">Remplir fiche</h1>

			<form action='php/hidden_insert.php' method='POST'> 


<?php
require 'php/script_insert.php';
?>

				<div id="submit">
					<input type='submit' value='Envoyer'/> 
				</div> 

			</form> 

		</div>
	</body>  
</html> 