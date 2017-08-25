
Notes on setting up a web app where the researchers can insert data about Roud archive (fill form, using consistent content). In order to speed up the process, I choose technologies that are more familiar to me: mysql, php.


######################## PREMIERS PAS - on MY COMPUTER (Ubuntu 16) #########################

See directory PremiersPas


## ___________________ INSTALL LAMP ___________________ ##

<https://askubuntu.com/questions/34/whats-the-easiest-way-to-set-up-a-lamp-stack>
Got an error with Tasksel, so followed the indications below

If having problems with phpmyadmin, include the line as described here:
<https://askubuntu.com/questions/19127/how-to-access-phpmyadmin-after-installation>


## ___________________ ACCESS TO DOCUMENT ROOT & TEST PHP __________________ ##

In  /etc/apache2/sites-available/000-default.conf   this line points to the default directory
	DocumentRoot /var/www/html
The same is indicated in <http://localhost>: "The default Ubuntu document root is /var/www/html."

I had to change the rights, using chmod 777 (this is only possible because it is on my machine, not on public server)

Try to visualize a simple html or php file. E.g.: *helloworld.html* and *helloworld.php* in /var/www/html should be reachable at <http://localhost/helloworld.html> and <http://localhost/helloworld.php>


## ___________________ ACCESS TO PHPMYADMIN ___________________ ##

	localhost/phpmyadmin

create db and tables


## ___________________ ACCESS TO DB FROM WWW ___________________ ##

If problems, check error logs in /var/log/apache2/error.log

Check *premiersPas/test_connection.php* and *premiersPas/interrogation_et_affichage.php*




########################## C'EST PARTI #######################################


## ___________________ SQL queries ____________________##


NULL value for an optional field <https://www.w3schools.com/sql/sql_null_values.asp>
Set NULL for the field in the table that put together all the others (fiche_text), c'est là que la valeur est optionnel (pas dans la table Annotation, ou Type, etc.)
Use LEFT JOIN (instead of INNER JOIN) on SELECT, if the field could be NULL



Example insert into:
	INSERT INTO ensemble(ensemble)
	VALUES ('TEST1'),('test2'),('test3')

Example query:
	SELECT fiche_texte.titre, ensemble.ensemble
	FROM fiche_texte
	INNER JOIN ensemble 
	ON fiche_texte.ensembleEd_id = ensemble.id
	
Example query single fiche with id:
	SELECT fiche_texte.id, titre, cote, ensemble.ensemble, type.type, support.support, instrument.instrument, statut.statut, genre.genre, dates_dates, dossier.dossier, publie, numerise, commentaire 
	FROM fiche_texte 
	INNER JOIN ensemble ON fiche_texte.ensemble_id = ensemble.id 
	INNER JOIN type ON fiche_texte.type_id = type.id 
	INNER JOIN support ON fiche_texte.support_id = support.id 
	INNER JOIN instrument ON fiche_texte.instrument_id = instrument.id 
	INNER JOIN statut ON fiche_texte.statut_id = statut.id 
	INNER JOIN genre ON fiche_texte.genre_id = genre.id 
	INNER JOIN dossier ON fiche_texte.dossier_id = dossier.id 
	WHERE fiche_texte.id = "19" 
	
	
Example query update fiche with id:
	UPDATE fiche_texte SET titre = 'Un autre titre 2', cote='un''altra segnatura 2', ensemble_id='3', type_id='1', support_id='1', instrument_id='1', statut_id='1', genre_id='1', dates_dates='1957 *', dossier_id='1', publie='ma si', numerise='oui' WHERE id='2'
	


## _________________ From 22 Aout 2017 ________________ ##

WHEN UPDATING FIELDS, CHANGE
	search.php
	script_visualize.php
	script_form.php
	hidden_insert.php, hidden_update.php (POST variables can be copy-pasted from one to the other, see comments)


FOLDER ORGANIZATION
	Scripts PHP and in which files they are called:
		script_visualize.php = visualization single record
			--> record.php
			--> record_created.php
			--> record_update.php
			--> form_update.php	
		script_update.php = code with button 'Modifier la fiche ... ?'
			--> record.php
			--> record_created.php
			--> record_update.php		
		script_form.php = form
			--> form_insert.php
			--> form_update.php
		
COLUMN NUMBER in visualization search.php (don't correspond to fiche_texte)
	0	id
	1	title
	2	cote
	3	nouvelle cote
	4	ensemble edit	
	5	type de doc	
	6	annote
	7	avec adjonctions
	8	support
	9	numeroté
	10	info support
	11	instrument
	12	autres instrument	
	13	date
	14	genre
	15	dossier
	16	etape
	17	version publiée
	18	numeriser
	19	commentaire
	


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
	


	





	
	
## _________________ FOR USERS ________________ ##

- Use a browser with char encoding Unicode.
- It is not responsive.
- Valori obbligatori?
- Ordine.
- Titre bold nella tabella search??
- Oui/non o intitutlé plus parlant? (importante anche nella ricerca)
- Passare in rassegna tutti i campi e vedere quali sono opzionali (null in fiche_texte)
- Stabilire parole da usare nel Commentaire (es. adjonctions)


## _____________________ TO DO ___________________ ##

- check presenza/assenza di freccettine che indicano ordine delle colonne (vd. background-image: url("DataTables-1.10.15/images/sort_both.png"); in CSS, che non c'è! non abbiamo images dentro css/DataTable .. !

- aggiungere field nouvelle cote











