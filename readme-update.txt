
ToC
- General info
- Update history
- For users
- To do




## _________________ GENERAL INFO ________________ ##


STRUCTURE SITE

form_insert.php	[php/script_insert.php]
--> 
php/hidden_insert.php 
--> 
record_created.php [php/script_visualize.php]

form_update.php	[php/script_visualize.php & php/script_form.php] 
--> 
php/hidden_update.php
--> 
record_updated.php [php/script_visualize.php]


FOLDER ORGANIZATION
	Scripts PHP and in which files they are called:
		script_visualize.php = visualization single record
			--> record.php
			--> record_created.php
			--> record_update.php
			--> form_update.php		
		script_insert.php = form for insertion
			--> form_insert.php
			--> form_update.php
		command_update.php = code with button 'Modifier la fiche ... ?'
			--> record.php
			--> record_created.php

		
COLUMN NUMBER in visualization search.php (don't correspond to fiche_texte)
	0	id
	1	title
	2	cote
	3	nouvelle cote
	4	ensemble edit	
	5	photocopie
	6	type de doc	
	7	annote
	8	avec adjonctions
	9	support
	10	numeroté
	11	info support
	12	instrument
	13	autres instrument	
	14	date
	15	genre
	16	dossier
	17	etape
	18	version publiée
	19	numeriser
	20	commentaire
	21	cuisine interne
	22	resp



WHEN UPDATING FIELDS in the DB, CHANGE
	search.php
	script_visualize.php
	script_insert.php
	script_update.php
	hidden_insert.php, hidden_update.php (POST variables can be copy-pasted from one to the other, see comments)
	





## _________________ Content UPDATE 22 Aout 2017 ________________ ##

Change value (id reste le meme, rien à changer dans interface)
	Type de document: manuscrit, dactylogramme, imprimé [obligatoire]
	DONE (in the table)
	
Add table (à changer dans l'interface)
	Annotation: oui [optionnel]
	DONE (all files)
	
Add table (à changer dans l'interface)
	Adjonction: oui [optionnel]
	DONE (all files)
	
Drop (remove) table 'dates' (à changer dans PHP et SQL)
	DONE (all files)

Change values (rien à changer dans l'interface)
	Support: feuillet, agenda, carnet, cahier, billet, divers
	DONE (in the table)


## _________________ Content UPDATE 23 Aout 2017 ________________ ##

Add table (à changer dans l'interface)
	Numbered: oui [optionnel]
	DONE (all files)
	
Add column in fiche_texte (à changer dans l'interface)
	Support_info: VARCHAR [optionnel]
	DONE (all files)
	


## ________________ Content UPDATE 24 Aout 2017 _________________ ##

Add column in fiche_texte (à changer dans l'interface)
	Nouvelle_cote: VARCHAR [optionnel]
	DONE (all files)
	
	
## _________________ Content UPDATE 25 Aout 2017 ___________________ ##

Change values (rien à changer dans l'interface)
	Etapes du processus d'écriture: note, plan, brouillon, mise au net, manuscrit définitif, correction sur épreuves, original corrigé
	DONE (in the db)
	
Change values (rien à changer dans l'interface)
	Instrument d'écriture: crayon, stylo feutre, stylo à bille, machine à écrire
	DONE (in the db)
	
Add table (à changer dans l'interface)
	Couleur: noir, rouge, bleu, rose, violet
	DONE (all files)
	
Add table (à changer dans l'interface)
	Autres instruments d'écriture (varchar 300)
	DONE (all files)
	
	
## _________________ Content UPDATE 28 Aout 2017 ___________________ ##

Add column 	
	numerise_info (varchar)
	DONE (all files)
	Pas visualizé dans la Recherche
	
	
## ________________ Content UPDATE 30 Aout 2017 ____________________ ##

Delete tables addition, annotation, numbered
	same info stored directly in fiche_texte
	DONE (all files)
	
Add column photocopy in fiche_texte
	DONE (all files)
	Pas visualizé dans la Recherche
	
Add table Biblio_ouvrages


## ________________ Content UPDATE after ____________________ ##

Vd. Github
	



	
## _________________ FOR USERS ________________ ##

Guide pour l'utilisateur:
	- utiliser un navigateur avec 'char encoding' Unicode.
	- pas d'italique, de gras, de sousligné. Utiliser plutot des guillemets, pour les titres, et des guillemets en chevron, pour les citations. Dans les citations, signaler les retours à la ligne avec '|'.  ?? check ??
	- dans un meme champ texte, separer les elements par une virgule ou point-virgule. 
	- mots et expressions frequent-e-s à utiliser: adjonction, vd. (à la place de 'aller voire' et simil), f. ou ff. (à la place de feuillet ou feuillets), recto/verso, texte inédit, (re?)transcrit, 
	- eliminer une fiche est possible
	- crayon est toujours gris?
	- journal (genre? étape?)
	- inédit: dossier? un dossier a parte? o 'divers'?
	- premiere lettre en rouge? Dans autres instrument? Titre en rouge?
	- qu'est-ce que ça veut dire 'fragment'? 1 (fragment) ?
	
	

- It is not responsive.
- Oui/non o intitulé plus parlant? (importante anche nella ricerca)
- Passare in rassegna tutti i campi e vedere quali sono opzionali (null in fiche_texte e leftjoin in sql)
- Version publié: prendere direttamente da Bibliography ?
- Dossier: tenere quelli che ci sono e aumentarli pian piano se serve.
- Un solo ensemble editorial





## _____________________ TO DO ___________________ ##

- bibliography ? For Dossier and for Version Publié
- rename form_insert > insert e form_update > update








