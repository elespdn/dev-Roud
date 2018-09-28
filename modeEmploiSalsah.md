# Mode d’emploi de Knora-Salsah



<hr>

## Table des matières

- [Premiers pas et configurations générales](#premiers)
- [Recherche simple](#recherche-simple)
- [Label (étiquette)](#label)
- [Symboles logiques utilisés dans les requêtes](#symboles)
- [Recherche avancée](#recherche-avancee)
- [Lire, modifier et effacer une ressource et ses liens](#lire)
- [Spécifier plusieurs conditions sur des propriétés](#conditions)
- [Classe abstraite Publication](#publication)
- [Dates dans les manuscrits](#dates)
- [Liens et références bibliographiques dans le texte](#liens)
- [Distinction entre auteur et personne](#distinction)
- [Problèmes](#problemes)

<hr>




<a style="color:lightgrey" href="#top">&#11025;</a> <a name="premiers">Premiers pas et configurations générales
===================================================

S’identifier, en cliquant sur le bonhomme bleu.

Choisir la langue, en haut à droite.

Toutes les fenêtres peuvent être déplacées et redimensionnées.

Icônes :

**loupe**, lance la recherche simple avec le(s) mot(s) inséré(s) dans le
champ texte à côté (*toujours limiter la recherche à une base*) ;

**loupe avec plus**, ouvre la fenêtre pour la recherche avancée ;

**plus**, ouvre la fenêtre pour insérer des données.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="recherche-simple">Recherche simple</a>
=============================

En haut de la page. Sélectionner la base sur laquelle lancer la
recherche : *roud-oeuvres* ; insérer le(s) mot(s) à chercher et envoyer la requête.

Les résultats s’ouvrent dans une nouvelle fenêtre. La première chose à
regarder est le type de ressource (deuxième colonne) ; en passant la
souris sur la ‘*i*’ (première colonne), on obtient un aperçu de la
ressource.

**Exemple : recherche simple du mot Chappaz (ou chappaz, les
majuscules ne comptent pas)**. On a 15 résultats, parmi lesquels des
documents d’archives, des livres, des sections de livre, des articles et
la personne Maurice Chappaz.

<hr>

<a style="color:lightgrey" href="#top">&#11025;</a> <a name="label">Label (étiquette)
==============================

Les labels sont très importants dans Knora-Salsah parce qu’ils
permettent d’identifier et de faire référence à une ressource. Quand on
lance une recherche simple, la troisième colonne des résultats est le
label (voir exemple ci-dessus).

Les labels ont la forme listée ci-dessous, selon le cas :

- en italique les variables à remplacer cas par cas, suivi par \_ sans
espace ;
- le signe ‘\_\_\_’ correspond à trois fois ‘\_’ et est précédé et suivi
par un espace ;
- pour l’auteur sont toujours donnés : *Nom Prénom*.

### Document d'archive

fiche\_*Cote* \_\_\_ *Titre*

ex : fiche\_MS 1 I/8c \_\_\_ Canzone di Togliatti

ex : fiche\_MS 6 B1 /1a \_\_\_ \[…wohl versteh ich die Frage…\]

### Auteur, traducteur, éditeur, collaborateur

aut\_*Auteur*

ex : aut\_Roud Gustave

ex : aut\_Crisinel Edmond-Henri

### Publication (livre)

pub\_*Auteur* \_\_\_ *Titre* \_\_\_ *Date*

ex : pub\_Collectif \_\_\_ Gustave Roud, la plume et le regard \_\_\_
1991

ex : pub\_Roud Gustave \_\_\_ Le Repos du cavalier \_\_\_ 1952

### Publication (section d’un livre)

pub\_*Auteur* \_\_\_ *Titre de la section* \_\_\_ *Titre du volume*
\_\_\_ *date*

ex : pub\_Roud Gustave \_\_\_ \[Peut-être la brève présentation…\]
\_\_\_ Catherine Colomb, Œuvres \_\_\_ 1968

ex : pub\_Pache Roger \_\_\_ Mes relations d'amitié avec Gustave Roud,
\_\_\_ Rencontres et Souvenirs, 1914-1984 \_\_\_ 1985

### Publication (article dans périodique)

pub\_*Auteur* \_\_\_ *Titre de l’article* \_\_\_ *Nom du périodique*
\_\_\_ *date*

Il n’est pas nécessaire de mettre des underscores à l’interieur du nom
du périodique.

ex : pub\_Roud Gustave \_\_\_ Annonce d'un Adieu \_\_\_ Présence \_\_\_
1932

ex : pub\_Roud Gustave \_\_\_ Un livre sur Gaston Vaudou \_\_\_
Gazette\_de\_Lausanne \_\_\_ 1958-09-27

### Périodique

period\_*Nom du périodique*

ex : period\_Formes et couleurs

### Maison d’édition

edi\_*Nom de la maison d’édition*

ex : edi\_L'Âge d'Homme

### Personne

pers\_*Personne*

ex : pers\_Colomb Catherine

ex : pers\_Thévoz Edmond

ex : pers\_Rey-Milliet Constant

### Page du site

Si imprimé → web\_*titre* \_\_\_ *éventuellement, titre du volume ou
du périodique *\_\_\_ *date*

Si manuscrit → web\_*titre \_\_\_ fonds cote*

ex : web\_Les Cueilleurs de pommes \_\_\_ Repos du cavalier \_\_\_
1958

ex : web\_Cueilleurs de pommes à Monnéaz \_\_\_ La\_Guilde\_du\_Livre
\_\_\_ 1946-11

ex : web\_Cueilleurs de pommes à Monnéaz \_\_\_ CRLR GR MS 1 G/2b

ex : web\_Catherine Colomb ou notre monde périssable sauvé par la
poésie \_\_\_ CRLR GR MS 2 F/4b

### Page scanée

page\_*fonds*\_\_\_*cote\_\_\_nom de la page*\_\_\_*numéro progressif*

### Événements biografique

bio\_année (si periode, premierAnnée-DeuxiemeAnnée)

### Lieu

lieu\_*nom du lieu*

ex : lieu\_Clos des Abbayes

### Photo

### Œuvre (littéraire, musique, art)

<hr>

<a style="color:lightgrey" href="#top">&#11025;</a> <a name="symboles">Symboles logiques utilisés dans les requêtes</a>
============================================

Pour les textes

### = est égal, identique
### ≠ est différent, inégal
### ∈ inclut (un ou plusieurs signes)
### ⊂ inclut (tous les signes)
### ⊄ n’inclut pas
### ∃ existe, est différent de vide ou de zéro

Pour les dates

### = pour une date ou une période
### &gt; après une date
### ≥ après ou égal à une date
### &lt; avant une date
### ≤ avant ou égal à une date

Pour les exemples suivants, ouvrir la recherche avancée (loupe avec
plus, en haut)

**Exemple 1 : tous les livres qui ont des collaborateurs (éditeurs,
traducteurs, etc., en plus de l’auteur).**

Sélectionner le vocabulaire : Œuvres complètes de Gustave Roud ;

le type de ressource : Livre ;

le champ de propriété : Collaborateurs ;

choisir ∃, on obtient 43 résultats.

**Exemple 2 : tous les livres qui ont des collaborateurs parmi lesquels
figure Chappaz.**

Sélectionner le vocabulaire : Œuvres complètes de Gustave Roud ;

le type de ressource : Livre ;

le champ de propriété : Collaborateurs ;

choisir ⊂** **et écrire chappaz ou Chappaz (les majuscules ne comptent
pas), on obtient 1 résultat.

**Exemple 3 : tous les livres qui ont des collaborateurs parmi lesquels ne
figure pas Chappaz.**

Sélectionner le vocabulaire : Œuvres complètes de Gustave Roud ;

le type de ressource : Livre ;

le champ de propriété : Collaborateurs ;

choisir ⊄ et écrire chappaz ou Chappaz, on obtient 42 résultats.

**Noter** que en choisissant le symbole ‘**=**’ Chappaz, on n’a aucun
résultat parce que la valeur de la propriété Collaborateurs n’est jamais
seulement ‘Chappaz’ ; en choisissant **≠** Chappaz, on obtient donc 43
résultats.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="recherche-avancee">Recherche avancée</a>
=================

Ouvrir la fenêtre pour la recherche avancée avec l’icône loupe et plus.

Sélectionner le vocabulaire à utiliser : ‘Œuvres complètes de Gustave
Roud \[roud-oeuvres\]’.

Choisir le type de ressource (livre, personne, document d’archive, etc.)
et, pour chaque type de ressource, ses propriétés (pour un livre :
l’auteur, le titre, la date de publication, etc. ; pour une personne :
le prénom, le nom, la date de naissance, etc.).

Filtre et modes d’affichage : régler selon besoins.

Tous les champs sont optionnels.

Dans l’affichage des résultats, après le colonnes *info*, *type* et
*label*, il y aura une colonne pour chaque propriété spécifiée dans la
requête (si des propriétés ont été spécifiées).

**Exemple 1 : toutes les personnes.**

Après avoir sélectionné le vocabulaire, choisir le type de ressource :
Personne. Lancer la recherche, on obtiendra 91 résultats.

**Exemple 2 : tous les article publiés dans une revue.**

Après avoir sélectionné le vocabulaire, choisir le type de ressource :
Article de périodique.

Dans le champ de propriété, choisir Périodique ; comme symbole, choisir
‘**=**’ ; ici on ne peut pas écrire librement, mais sélectionner à
partir d’une liste de périodiques identifiés par leurs *labels* (d’où
l’importance du label). Le *label* d’un périodique commence toujours par
‘period\_’ donc il suffira d’écrire ça et la liste se déroule.
Malheureusement, la liste n’est pas ordonnée, il faudra donc continuer à
écrire pour voir moins d’options, par exemple ‘period\_La semaine de la
femme’.

Lancer la recherche, on obtiendra 11 résultats.

**Exemple 3 : un document par sa cote.**

Après avoir sélectionné le vocabulaire, choisir le type de ressource :
Document d’archive. Dans le champ de propriété, choisir Cote du
document ; comme symbole, choisir ‘**=**’ ; écrire la cote d’un
document, par exemple ‘MS 2 C/8a’ (attention aux espaces!!!). Lancer la
recherche, on obtiendra 1 résultat.

La quatrième colonne des résultats donnera la cote, car on a spécifié
cette propriété dans la requête.

**Exemple 4 : les documents dont la cote commencent par ‘MS 2 C’.**

Après avoir sélectionné le vocabulaire, choisir le type de ressource :
Document d’archive. Dans le champ de propriété, choisir Cote du
document ; comme symbole, choisir ‘⊂’ ; écrire le début de la cote
souhaitée ‘MS 2 C’ (attention aux espaces!!!). Lancer la recherche, on
obtiendra 27 résultats.

La quatrième colonne des résultats donnera la cote, car on a spécifié
cette propriété dans la requête.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="lire">Lire, modifier et effacer une ressource et ses liens</a>
====================================================

Lire
----

Une fois qu’une requête a été effectuée, cliquer dans la liste des
résultats sur la ressource à afficher : une nouvelle fenêtre s’ouvre. Le
petit graphe en haut donne une visualisation des liens entre les
données. La première ligne contient un point d’interrogation pour
[créer des liens](#liens) ; le type (ou classe) de la ressource ; une
poubelle pour effacer la ressource entière. Les autres icônes ne seront
pas utilisées. La deuxième ligne montre le label.

La section Descriptive Metadata contient les données de cette ressource.

En plus, le champ ‘a standoff lien vers’ liste les liens à des
ressources qui existent dans des champs textes de la ressource présente
(par exemple, dans la ressource ‘pers\_Chappaz Maurice’ il y apparaît la
publication de la correspondance, car dans la notice – qui est un champ
texte– il y a un lien à ça). Tous en bas de la fenêtre, dans la section
‘Other objects referencing this object’ sont listées toutes les
ressources qui ont des liens vers la ressource présente (**par exemple,
pour une publication apparaissent ici les documents d’archive en
liens**).

Modifier
--------

La modification des valeurs des propriétés d’une ressource qui existent
déjà se fait directement dans la/les valeur(s) à modifier, et non pas
pour la ressource entière.

Cliquer sur le petit crayon à côté de la valeur à modifier, modifier, ne
pas oublier de sauvegarder (cliquer sur l’icône floppy disk) avant de
fermer la fenêtre.

Se souvenir de mettre à jour le label, si les valeurs changées sont les
mêmes qui figurent dans le label (par exemple la date).

Effacer
-------

Pour effacer une ressource entière, utiliser l’icône de la poubelle
grise en haut de la fenêtre de la ressource.

Pour effacer le valeur d’une propriété, utiliser l’icône de la poubelle
rouge et blanche à côté de la valeur même.

Dans les deux cas, un message de confirmation s’affiche avant de
procéder à éliminer la ressource.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="conditions">Spécifier plusieurs conditions sur des propriétés</a>
=================================================

On peut ajouter des conditions sur plusieurs propriétés (icône plus sous
‘Champ de propriété’) ; quand plusieurs conditions sont spécifiées, les
résultats doivent satisfaire aux deux conditions (AND), et non pas l’une
ou l’autre (OR).

**Exemple 1 : les documents du fonds Gustave Roud du CRLR dont la cote
commence par MS 2 C et qui font partie de l’œuvre poétique.**

Type de ressource : Document d’archive ;

champ de propriété : Cote du document ⊂ ‘MS 2 C’ ;

champ de propriété : Fonds **=** ‘CRLR GR’ ;

lancer la recherche, on obtiendra 27 résultats.

Changer le deuxième champ de propriété (fonds) et choisir : Ensemble
éditorial **=** ‘Œuvre poétique’ ;

lancer la recherche, on obtiendra 8 résultats.

Modifier le champ de propriété : Ensemble éditorial **=** ‘Propos’ ;

lancer la recherche, on obtiendra 19 résultats.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="publication">Classe abstraite Publication</a>
============================

Certaines classes (ou types de ressource) et propriétés sont des classes
et propriétés abstraites (ou "mère"), c’est à dire qu’elles ont des
sous-classes et sous-propriétés concrètes qui sont utilisées dans la
base. Par exemple, les classes ‘Livre’, ‘Section d’un livre’ et ‘Article
de périodique’ sont des sous-classes de la classe ‘Publication’.

Les classes et propriétés abstraites sont marquées comme ‘Classe
abstraite, seulement pour les requêtes’ pour ne pas créer de confusion
lorsqu’on insère des données. Par contre, elle peuvent être utiles lors
d’une requête (même si les propriétés sont limitées aux propriétés en
commun des sous-classes).

**Exemple 1 : les publications de Roud antérieures à une certaine date.**

Type de ressource : Publication (abstraite) ;

champ de propriété : Auteur **=** ‘aut\_Roud Gustave’ ;

champ de propriété : Date **&lt;** ‘1920’ ;

lancer la recherche, on obtiendra 3 résultats.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="dates">Dates dans les manuscrits</a>
=========================

Les manuscrits peuvent avoir une date ou une datation. Chaque date et
datation a une version ‘lisible’ et une version ‘formalisée’, qui permet
à la machine de faire des calculs.

Les dates et datations lisibles sont ce qu’on voudrait voir dans le
site, pendant que les dates et datations formalisées servent à la
machine. **Les recherches doivent se faire sur les dates et les
datations formalisées**.

Pour faire des recherches sur des dates et des datations en même temps
(par exemple, tous les manuscrits avant 1920, qui ont une date ou une
datation avant 1920), on a deux possibilités :

- faire deux recherches séparées (et non pas ajouter plusieurs
conditions sur les propriétés)

- faire une seule recherche en utilisant une propriété abstraite qui
regroupe les deux. Pour ce faire, ouvrir une fenêtre pour la recherche
avancée, ne pas sélectionner de type (ou classe) et sélectionner la
propriété, vers la fin de la liste : ‘(Propriété abstraite, seulement
pour les requêtes) Date ou datation formalisées du document’. Spécifier
les valeurs requises et lancer la recherche.

**Exemple : en utilisant la propriété abstraite ‘(Propriété abstraite,
seulement pour les requêtes) Date ou datation formalisées du document’,
on voit que tous les manuscrits qui ont une date ou datation avant
(&lt;) 1920** sont au nombre de 35. Tous les manuscrits qui ont une date
ou une datation avant ou égal à (≤) 1920 sont au nombre de 48.

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="liens">Liens et références bibliographiques dans le texte</a>
==================================================

Les ressources peuvent avoir des propriétés de type texte, comme les
notices ou les commentaires. Ici, on peut insérer des liens vers
d’autres ressources : des personnes, des entrées bibliographiques, des
lieux, des œuvres, etc.

Pour ce faire, cliquer sur le petit crayon pour [modifier](#lire) la
valeur dans laquelle on veut insérer un lien, sélectionner la portion de
texte qui portera le lien, ouvrir dans une autre fenêtre la ressource
vers laquelle le lien se dirige, drag and drop le point d’interrogation
(en haut de la fenêtre de la ressource target) sur la portion de texte
sélectionné. Sauvegarder, avant de fermer la fenêtre !

Pour toute référence bibliographique, le lien se tient sur une portion
de texte composée de la façon suivante : auteur, titre, année. S’il
s’agit d’un article en revue ou d’un chapitre d’un ouvrage, le titre de
l’article ou du chapitre suffira. Le lien permettra d’afficher la
ressource complète en passant la souris dessus ou en ouvrant la page de
la bibliographie.

Pour des exemples, voir dans les commentaires des documents d’archives,
où les liens ont été créés à partir des \[Biblio *num*\] dans les fiches
(avec le symbole ∃ on pourra rechercher tous les documents d’archives
qui ont des commentaires…).

<hr>


<a style="color:lightgrey" href="#top">&#11025;</a> <a name="distinction">Distinction entre auteur et personne</a>
====================================

La personne a une notice, éventuellement une photo, et peut être
mentionnée dans un texte de Roud.

L’auteur (traducteur, éditeur ou collaborateur) est une personne qui
apparaît dans une entrée bibliographique, mais pour laquelle il n’y a ni
notice ni photo.

Par exemple, Olivier Cherpillod est une personne, tandis que Ursula
Kobilijac est une autrice. Des gens peuvent figurer comme personne et
comme auteur (traducteur, éditeur ou collaborateur), c’est le cas de
Catherine Colomb ou Maurice Chappaz.

<a style="color:lightgrey" href="#top">&#11025;</a> <a name="problemes">Problèmes</a>
========

Si on n’arrive pas à obtenir les résultats voulus ou que l’interface ne
supporte pas la requête souhaitée, ou pour tout autre problème,
n’hésitez pas à contacter Elena.
