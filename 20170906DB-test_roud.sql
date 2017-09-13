-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2017 at 02:37 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_roud`
--

-- --------------------------------------------------------

--
-- Table structure for table `biblio_ouvrages`
--

CREATE TABLE `biblio_ouvrages` (
  `id` int(11) NOT NULL,
  `Type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Auteur` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Titre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ouvrage_Publication` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dir_éd_trad` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Numéro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lieu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Maison_dédition` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pages` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Repris_dans` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biblio_ouvrages`
--

INSERT INTO `biblio_ouvrages` (`id`, `Type`, `Auteur`, `Titre`, `Ouvrage_Publication`, `Dir_éd_trad`, `Numéro`, `Lieu`, `Maison_dédition`, `Date`, `Pages`, `Repris_dans`) VALUES
(1, 'Article', 'Roud, Gustave', 'Lectures', '', 'éd. Jaccottet, Philippe et Jakubec, Doris', '', 'Lausanne', 'L\'Aire', '1988', '', ''),
(2, 'Article', 'Roud, Gustave', 'Salut à quelques peintres', '', 'éd. Jaccottet, Philippe et Jakubec, Doris', '', 'Lausanne', 'La Bibliothèque des Arts', '1999', '', ''),
(3, 'Article', 'Roud, Gustave et Simon, Daniel', 'Avec Ramuz', '', '', '', 'Lausanne', 'L\'Aire ("Coopérative Rencontre")', '1967', '', ''),
(4, 'Œuvre', 'Roud, Gustave', 'Les Fleurs et les Saisons', '', 'éd. et note d\'édition Jaccottet, Philippe', '', 'Genève', 'La Dogana', '1991, 2003', '', ''),
(5, 'Article', 'Roud, Gustave', 'Ecrit à Carrouge, précédé de Calendrier', '', 'postface et éd. Maggetti, Daniel', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2001, rééd. 2011', '', ''),
(6, 'Œuvre', 'Roud, Gustave', 'Haut-Jorat', '', 'postface et éd. Stéphane Pétermann', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2001, rééd. 2011', '', ''),
(7, 'Traduction', 'Trakl, Georg', 'Vingt-quatre poèmes', '', 'préface et trad. Roud, Gustave [1964] ; éd. et note d\'édition Jaccottet, Philippe', '', 'Paris', 'La Délirante', '1978', '', ''),
(8, 'Journal', 'Roud, Gustave', 'Journal', '', 'préface et éd. Jaccottet, Philippe', '', 'Vevey', 'Bertil Galland', '1982', '', 'Empreintes, 2004'),
(9, 'Journal', 'Roud, Gustave', 'Journal, Carnets, cahiers, feuillets (I 1916-1936 ; II 1937-1971)', '', 'éd. Delacrétaz, Anne-Lise et Jacquier, Claire ; introduction Jacquier, Claire', '', 'Moudon', 'Empreintes', '2004', '2 volumes', ''),
(10, 'Œuvre', 'Roud, Gustave', 'Ecrits, I-III', '', 'éd. Jaccottet, Philippe', '', 'Lausanne', 'La Bibliothèque des Arts', '1978, rééd. 1989', '3 volumes', ''),
(11, 'Œuvre', 'Roud, Gustave', 'Ecrits, I-II', '', 'éd. Jaccottet, Philippe', '', 'Lausanne', 'Mermod', '1950', '2 volumes', 'La Bibliothèque des Arts, 1978'),
(12, 'Œuvre', 'Roud, Gustave', 'L\'Aveuglement', 'Ecrits, III', 'éd. Jaccottet, Philippe', '', 'Lausanne', 'La Bibliothèque des Arts', '1978, rééd. 1989', '3 volumes', 'Europe, n°882, 2002'),
(13, 'Œuvre', 'Roud, Gustave', 'L\'Aveuglement', 'Europe', '', '882', '', '', '2002', 'p. 111-114', ''),
(14, 'Traduction', 'Novalis', 'Les Disciples de Saïs, Hymnes à la nuit, Journal', '', 'trad. Roud, Gustave', '', 'Lausanne', 'Mermod', '1948', '', 'Fata Morgana, 2002'),
(15, 'Traduction', 'Novalis', 'Les Disciples de Saïs, Hymnes à la nuit, Journal intime', '', 'trad. Roud, Gustave', '', 'Montpellier', 'Fata Morgana', '2002', '', ''),
(16, 'Œuvre', 'Roud, Gustave', 'Haut-Jorat: texte et photographies', '', '', '', 'Lausanne', 'Payot', '1978', '', 'Castella, 1966 ; Fata Morgana, 2002'),
(17, 'Œuvre', 'Roud, Gustave', 'Haut-Jorat', '', '', '', 'Lausanne', 'Terreaux', '1949', '', ''),
(18, 'Traduction', 'Rilke, Rainer Maria', 'Lettres à un jeune poète, précédées d\'Orphée et suivies de deux essais sur la poésie', '', 'trad. Roud, Gustave', '', 'Lausanne', 'Mermod', '1945, rééd. 1947', '', 'La Bibliothèque des Arts, 1990'),
(19, 'Traduction', 'Rilke, Rainer Maria', 'Lettres à un jeune poète, précédées d\'Orphée et suivies de deux essais sur la poésie', '', 'trad. Roud, Gustave', '', 'Lausanne', 'La Bibliothèque des Arts', '1990', '', ''),
(20, 'Traduction', 'Rilke, Rainer Maria', 'Arrière-automne à Venise', '', 'trad. Roud, Gustave', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2008', '', ''),
(21, 'Œuvre', 'Roud, Gustave', 'Adieu', '', '', '', 'Lausanne', 'Au Verseau', '1927', '', 'Aux Portes de France, 1944 ; Ecrits, I, 1950 ; Ecrits, I, 1978 ; Zoé, 1997 ; Gallimard, 2002'),
(22, 'Œuvre', 'Roud, Gustave', 'Adieu', '', '', '', 'Porrentruy', 'Aux Portes de France', '1944', '', ''),
(23, 'Œuvre', 'Roud, Gustave', 'Adieu ; Requiem', '', '', '', 'Carouge-Genève', 'Zoé', '1997', '', ''),
(24, 'Œuvre', 'Roud, Gustave', 'Feuillets', '', '', '', 'Lausanne', 'Mermod', '1929', '', 'Ecrits, I, 1950 ; Ecrits, I, 1978'),
(25, 'Œuvre', 'Roud, Gustave', 'Essai pour un paradis', '', '', '', 'Lausanne', 'Mermod', '1932', '', 'Ecrits, I, 1950 ; Ecrits, I, 1978 ; Fata Morgana, 1978 ; L\'Age d\'Homme, 1984'),
(26, 'Œuvre', 'Roud, Gustave', 'Essai pour un paradis', '', 'préface de Jaccottet, Philippe', '', 'Montpellier', 'Fata Morgana', '1978', '', ''),
(27, 'Œuvre', 'Roud, Gustave', 'Petit traité de la marche en plaine', '', '', '', 'Lausanne', 'Mermod', '1932', '', 'Ecrits, I, 1950 ; Ecrits, I, 1978 ; L\'Age d\'Homme, 1984'),
(28, 'Œuvre', 'Roud, Gustave', 'Pour un moissonneur', '', '', '', 'Lausanne', 'Aujourd\'hui', '1941', '', 'Ecrits, II, 1950 ; Ecrits, II, 1978 ; Gallimard, 2002'),
(29, 'Traduction', 'Hölderlin, Friedrich', 'Poèmes', '', 'trad. Roud, Gustave', '', 'Lausanne', 'Mermod', '1942', '', 'Fata Morgana, 2006'),
(30, 'Traduction', 'Hölderlin, Friedrich', 'Quelques poèmes des temps obscurs', '', '', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2006', '', ''),
(31, 'Traduction', 'Gundmundsson, Kristmann', 'Rive bleue', '', 'trad. Roud, Gustave', '', 'Lausanne', 'La Guilde du livre', '1944', '', ''),
(32, 'Œuvre', 'Roud, Gustave', 'Air de la solitude', '', '', '', 'Lausanne', 'Mermod', '1945', '', 'Ecrits, II, 1950 ; Ecrits, II, 1978 ; Fata Morgana, 1988 ; L\'Age d\'Homme, 1995 ; Gallimard, 2002'),
(33, 'Œuvre', 'Roud, Gustave', 'Air de la solitude', '', 'préface de Bobin, Christian', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '1988', '', ''),
(34, 'Œuvre', 'Roud, Gustave', 'Air de la solitude; suivi de Campagne perdue', '', 'préface de Chessex, Jacques', '', 'Lausanne', 'L\'Age d\'Homme', '1995', '', ''),
(35, 'Œuvre', 'Roud, Gustave', 'Air de la solitude et autres écrits', '', 'préface de Jaccottet, Philippe', '', 'Paris', 'Gallimard', '2002', '', ''),
(36, 'Article', 'Ramuz, Charles Ferdinand et Roud, Gustave', 'Chant de Pâques: récit précédé de La Présence perdue de Gustave Roud', '', '', '', 'Lausanne', 'La Guilde du livre', '1951', '', ''),
(37, 'Œuvre', 'Roud, Gustave', 'Etoile', '', '', '', 'Lausanne', 'Pour l\'Art', '1952', '', ''),
(38, 'Traduction', 'Lejeune, Robert', 'Daumier, Honoré', '', 'trad. Roud, Gustave', '', 'Lausanne', 'La Guilde du livre', '1953', '', ''),
(39, 'Traduction', 'Schuh, Gotthard', 'Iles des dieux: Java, Sumatra, Bali', '', 'trad. Roud, Gustave', '', 'Lausanne', 'Clairefontaine', '1954', '', ''),
(40, 'Traduction', 'Boller, Willy', 'Hokusaï: un maître de l\'estampe japonaise', '', 'trad. Roud, Gustave', '', 'Lausanne', 'La Guilde du livre', '1955', '', ''),
(41, 'Traduction', 'Geiser, Bernard (intro et choix)', 'L\'Oeuvre gravé de Picasso', '', 'trad. Roud, Gustave', '', 'Lausanne', 'La Guilde du livre', '1955', '', ''),
(42, 'Traduction', 'Huttiger, Edouard', 'La Peinture hollandaise au XVIIe siècle', '', 'trad. Roud, Gustave et Cornuz, Jeanlouis', '', 'Lausanne', 'La Guilde du livre', '1956', '', ''),
(43, 'Traduction', 'Schuh, Gotthard', 'Instants volés, instants donnés', '', 'trad. Roud, Gustave; limnaire de Fouchet, Max-Pol', '', 'Lausanne', 'La Guilde du livre', '1956', '', ''),
(44, 'Œuvre', 'Roud, Gustave', 'Le Repos du cavalier', '', '', '', 'Lausanne', 'La Bibliothèque des Arts', '1958', '', 'Ecrits, III, 1978 ; L\'Aire, 2003'),
(45, 'Œuvre', 'Roud, Gustave', 'Le Repos du cavalier', '', 'préface de Roman, Jacques', '', 'Vevey', 'L\'Aire', '2003', '', ''),
(46, 'Article', 'Roud, Gustave', '??', 'René Auberjonois (1872-1957): rétrospective: Musée Cantonal des Beaux-Arts, Lausanne, du 6 septembre au 19 octobre', 'préface de Roud, Gustave et de Fischer, Guido', '', 'Lausanne', 'Musée Cantonal des Beaux-Arts', '1958', 'pp?', ''),
(47, 'Œuvre', 'Roud, Gustave', '??', 'Revue de Belles-Lettres', '', '5', 'Lausanne', 'Société de Belles-Lettres', '1929', 'pp.?', ''),
(48, 'Correspondance', 'Roud, Gustave ; Chamson, André ; Dunoyer, Jean Marie ; Ramuz, Charles Ferdinand', 'Lettres 1919-1947', '', '', '', 'Etoy', 'Les Chantres', '1959', '', ''),
(49, 'Article', 'Roud, Gustave', '"Petite lettre au maître ymagier Max Roth"', 'Ramuz, Charles Ferdinand, Le Passage du poète', 'présenté par Roud, Gustave', '', 'Lausanne', 'Au Verseau', '1960', 'pp.?', ''),
(50, 'Article', 'Roud, Gustave et Simon, Daniel', '??', 'Hommage à Jacques Berger', '', '', 'Lausanne', 'Pour l\'Art', '1963', 'pp?', ''),
(51, 'Article', 'Roud, Gustave et Zermatten, Maurice', '"Gérard de Palézieux"', 'Journal de Sierre', '', '52', '', '', '1964', 'pp. ?', ''),
(52, 'Traduction', 'Novalis', 'Hymnes à la nuit', '', 'trad. Roud, Gustave ; avant-propos Jaccottet, Philippe', '', 'Albeuve', 'Castella', '1966', '', ''),
(53, 'Article', 'Roud, Gustave', '??', 'Steven-Paul Robert: 1896', 'préface de Roud, Gustave ; documentation réunie par Manganel, Ernest', '', 'Genève', 'P. Cailler', '1966', 'pp. ?', ''),
(54, 'Article', 'Roud, Gustave et Simon, Daniel', '??', 'Ramuz, Charles Ferdinand, Œuvres complètes', 'présenté par Roud, Gustave et Simon, Daniel', '', 'Lausanne', 'Rencontres', '1967, rééd. 1968, 1973, 1976', 'pp. ?', '10 volumes'),
(55, 'Œuvre', 'Roud, Gustave', 'Requiem', '', '', '', 'Lausanne', 'Payot', '1967, rééd. 1968, 1977 ; Zoé, 1997', '', ''),
(56, 'Article', 'Roud, Gustave et Simon, Daniel', 'Avec Ramuz', '', '', '', 'Lausanne', 'Aire ("Coopérative Rencontre")', '1967, rééd. 1985', '', ''),
(57, 'Article', 'Roud, Gustave', '??', 'Colomb, Catherine, Œuvres', 'préface de Roud, Gustave', '', 'Lausanne', 'Rencontre', '1968', 'pp.?', ''),
(58, 'Article', 'Roud, Gustave', '??', 'Valotton, Félix, Corbehaut', 'préface de Roud, Gustave', '', 'Lausanne', 'Société de la Feuille d\'Avis', '1970', 'pp. ?', ''),
(59, 'Œuvre', 'Roud, Gustave', 'Campagne perdue', '', '', '', 'Lausanne', 'Bibliothèque des Arts', '1972', 'L\'Age d\'Homme, 1995', ''),
(60, 'Article', 'Roud, Gustave', '??', 'La Galerie Paul Vallotton, 1913-1973', 'introduction de Roud, Gustave', '', 'Lausanne', 'Galerie Paul Valotton', '1973', 'pp.?', ''),
(61, 'Correspondance', 'Roud, Gustave et Béguin, Albert', 'Lettres sur le romantisme allemand', '', 'introduction de Grotzer, Pierre ; notes et choix de textes de Françoise Fornerod', '', 'Lausanne', 'Etudes de lettres', '1974', '', ''),
(62, 'Correspondance', 'Roud, Gustave et Martin, Vio', 'Un hêtre en juillet: extraits de lettres à une amie', 'Solaire', '', '24', '', '', '1979', 'pp.?', ''),
(63, 'Œuvres', 'Roud, Gustave', 'Les Poèmes en vers et en versets', 'Cahiers Gustave Roud', '??', '1', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1980', '', ''),
(64, 'Correspondance', 'Roud, Gustave et Robert, Steven-Paul', 'Lettres de jeunesse', 'Cahiers Gustave Roud', '??', '2', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1981', '', ''),
(65, 'Traduction', 'Roud, Gustave', 'Traductions éparses', 'Cahiers Gustave Roud', 'Présentation de Jaccottet, Philippe ; collab. Jakubec, Doris', '3', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1982', '', ''),
(66, 'Œuvres/Articles', 'Roud, Gustave', 'Proses éparses', 'Cahiers Gustave Roud', '', '6', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '', '', ''),
(67, 'Correspondance', 'Roud, Gustave et Crisinel, Edmond-Henri', 'Correspondance 1928-1947', 'Cahiers Gustave Roud', 'éd. Delacrétaz, Anne-Lise ; avant-propos Jakubec, Doris', '7', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1997', '', ''),
(68, 'Correspondance', 'Roud, Gustave et Matthey, Pierre-Louis', 'Correspondance 1932-1969', 'Cahiers Gustave Roud', 'éd. Delacrétaz, Anne-Lise ;  avant-propos Graf, Marion', '8', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1997', '', ''),
(69, 'Correspondance', 'Roud, Gustave et Colomb, Catherine', 'Correspondance 1945-1964', 'Cahiers Gustave Roud', 'éd. et avant-propos de Delacrétaz, Anne-Lise', '9', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1997', '', ''),
(70, 'Œuvre', 'Roud, Gustave', 'Requiem, présentation, lecture et analyse des manuscrits', 'Cahiers Gustave Roud', 'éd., présentation et analyse par Pasquali, Adrien', '10', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '1997', '', ''),
(71, 'Correspondance', 'Roud, Gustave et Mercanton, Jacques', 'Correspondance 1948-1972', 'Cahiers Gustave Roud', 'éd. Maggetti, Daniel et Pétermann, Stéphane ; avant-propos de Maggetti, Daniel', '11', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '2006', '', ''),
(72, 'Correspondance', 'Roud, Gustave et Borgeaud, Georges', 'Correspondance 1936-1974', 'Cahiers Gustave Roud', 'éd. et présentation par Delacrétaz, Anne-Lise', '12', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '2008', '', ''),
(73, 'Correspondance', 'Roud, Gustave et Raymond, Marcel', 'Correspondance 1942-1976', 'Cahiers Gustave Roud', 'éd. Fleury, Nicolas et Léchot, Timothée ; avant-propos de Fleury, Nicolas ; collab. Cornuz, Odile', '13', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '2009', '', ''),
(74, 'Correspondance', 'Roud, Gustave et Galland, Bertil', 'Correspondance 1957-1976', 'Cahiers Gustave Roud', 'éd. et avant-propos de Maggetti, Daniel ; avec la collab. de Gex, Nicolas ; postface de Bertil Galland', '14', 'Lausanne/Carrouge', 'Association des Amis de Gustave Roud', '2011', '', ''),
(75, '', 'Roud, Gustave', '??', 'Lettres romandes [de la blessure à l\'hémorragie] dans L\'Alphée', 'présentation de Garcin, Jérôme', '6', '', '', '1981', 'pp.?', ''),
(76, 'Œuvres', 'Roud, Gustave', 'Essai pour un paradis ; suivi de Petit traité de la marche en plaine', '', 'préface de Jaccottet, Philippe', '', 'Lausanne', 'L\'Age d\'Homme', '1984, rééd. 1997', '', ''),
(77, 'Correspondance', 'Roud, Gustave, Bille, S. Corinna', 'S. Corinna Bille, 1912-1979 - Gustave Roud, 1897-1976', 'Voix des lettres', 'éd. Mousse Boulanger', '15', '', '', '1986', 'p. 36-37', ''),
(78, 'Article', 'Roud, Gustave', '??', 'Palézieux: [exposition], Musée Jenisch, Vevey [du 21 mai au 6 août] 1898 [catalogue]', 'Textes de Roud, Chappaz, Jaccottet, Bonnefoy', '', 'Vevey', 'Musée des beaux-arts', '1989', '', ''),
(79, 'Article', 'Roud, Gustave', '??', 'Ramuz vu par ses amis: Adrien Bovy, Charles-Albert Cingria, Edmond Gilliard, Paul Budry, Ernest Ansermet, René Auberjonois, Albert Muret, Elie Gagenbin, Henri-Louis Mermod, Gustave Roud', 'Préface de Gérard Buchet; éd. Walzer, Pierre-Olivier et Buchet Gérard', '', 'Lausanne', 'L\'Age d\'Homme', '1989', '', ''),
(80, 'Article', 'Roud, Gustave', '??', 'Colomb, Catherine, Œuvres complètes', 'préface de Roud, Gustave', '', 'Lausanne', 'L\'Age d\'Homme', '1993', 'volume 1', ''),
(81, 'Correspondance', 'Roud, Gustave et Chappaz, Maurice', 'Correspondance 1939-1976', '', 'éd. Jaquier, Claire et de Ribaupierre, Claire', '', 'Carouge-Genève', 'Zoé', '1993', '', ''),
(82, 'Correspondance', 'Roud, Gustave et Martin, Vio', 'Correspondance littéraire et amoureuse', '', 'choisie et éd. par Boulanger, Mousse et Cornuz, Jeanlouis', '', 'Vevey', 'L\'Aire', '1994', '', ''),
(83, 'Œuvre', 'Roud, Gustave', 'Ici ce conte', '', '', '', 'Lausanne', 'Raynald Métraux', '1997', '', ''),
(84, 'Correspondance', 'Roud, Gustave', 'Lettre de Gustave Roud à Henri-Louis Mermod', 'Les Echos de Saint-Maurice', 'éd. Meizoz, Jérôme', '93a', '', '', '1998', 'p. 43-46', ''),
(85, 'Correspondance', 'Auberjonois, René', 'Avant les autruches, après les iguanes: Lettres à Gustave Roud, 1922-1954', '', 'éd. et présentation de Jakubec, Doris, de Ribaupierre, Claire ; collab. Panchaud, Valérie', '', 'Dorigny', 'Centre de recherches sur les lettres romandes', '1999', '', ''),
(86, 'Œuvre', 'Roud, Gustave ; Palézieux, Gérard de', 'Halte en juin', '', '', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2001, rééd. 2010', '', ''),
(87, 'Correspondance', 'Roud, Gustave et Jaccottet, Philippe', 'Correspondance 1942-1976', '', 'éd. et présentation par José-Flore Tappy', '', 'Paris', 'Gallimard', '2002, 2003', '', ''),
(88, 'Œuvre', 'Roud, Gustave', '??', 'Lectures conseillées: une anthologie, par Maggetti, Daniel', '', '', 'Vevey', 'Aire', '2002', '', ''),
(89, 'Article', 'Roud, Gustave et Palézieux, Gérard de', 'Image sans emploi', '', '', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2002', '', ''),
(90, 'Œuvre', 'Roud, Gustave', '??', 'Conférence', '', '17', '', '', '2003', 'p. 118-123', ''),
(91, 'Correspondance', 'Roud, Gustave et Nicole, Georges', 'Correspondance 1920-1959', '', 'éd. Pétermann, Stéphane', '', 'Gollion', 'Infolio', '2009', '', ''),
(92, 'Article', 'Roud, Gustave', 'Vues sur Rimbaud', '', 'éd. et postface par Rodriguez, Antonio', '', 'Saint-Clément-de-Rivière (Hérault)', 'Fata Morgana', '2010', '', ''),
(93, 'Correspondance', 'Roud, Gustave et Chessex, Jacques', 'Correspondance 1953-1976', '', 'éd. et présentation Pétermann, Stéphane', '', 'Gollion', 'Infolio', '2011', '', ''),
(94, 'Correspondance', 'Roud, Gustave et Paulhan, Jean', '"Correspondance Jean Paulhan - Gustave Roud"', 'Paulhan, Jean ; Ramuz, Charles Ferdinand ; Roud, Gustave, Le Patron, le Pauvre Homme, le Solitaire', 'éd. et présentation Maggetti et Daniel, Pétermann, Stéphane', '', 'Genève', 'Slatkine', '2007', 'p. 119-140', ''),
(95, 'Traduction', 'Hölderlin, Friedrich', '"Le Rhin"', 'Mesures', 'trad. Roud, Gustave', '1', '', '', '1940, 15 janvier', 'p. 89-107', ''),
(96, 'Traduction', 'Hölderlin, Friedrich', '"Le Rhin"', 'Paulhan, Jean ; Ramuz, Charles Ferdinand ; Roud, Gustave, Le Patron, le Pauvre Homme, le Solitaire ; éd. et présentation Maggetti, Daniel et Pétermann, Stéphane', 'trad. Roud, Gustave', '', 'Genève', 'Slatkine', '', 'p. 259-265', '');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'noir'),
(2, 'rouge'),
(3, 'bleu'),
(4, 'rose'),
(5, 'violet'),
(6, 'gris');

-- --------------------------------------------------------

--
-- Table structure for table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(11) NOT NULL,
  `dossier` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dossier`
--

INSERT INTO `dossier` (`id`, `dossier`) VALUES
(1, 'Requiem'),
(2, 'Essai pour un paradis'),
(3, 'Air de la solitude'),
(4, 'Le repos du cavalier'),
(5, 'Campagne perdue'),
(6, 'Articles'),
(7, 'Journal'),
(8, 'Traductions'),
(9, 'Divers'),
(10, 'Adieu'),
(11, 'Petit traité de la marche en plaine suivi de lettres, dialogues et morceaux'),
(12, 'Pour un moissoneur');

-- --------------------------------------------------------

--
-- Table structure for table `ensemble`
--

CREATE TABLE `ensemble` (
  `id` int(11) NOT NULL,
  `ensemble` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ensemble`
--

INSERT INTO `ensemble` (`id`, `ensemble`) VALUES
(1, 'Oeuvre poétique'),
(2, 'Journal'),
(3, 'Articles et chroniques'),
(4, 'Traductions'),
(13, 'Divers');

-- --------------------------------------------------------

--
-- Table structure for table `fiche_texte`
--

CREATE TABLE `fiche_texte` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cote` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nouvelle_cote` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ensemble_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `annotation` text COLLATE utf8_unicode_ci,
  `addition` text COLLATE utf8_unicode_ci,
  `support_id` int(11) NOT NULL,
  `numbered` text COLLATE utf8_unicode_ci,
  `support_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `instrument_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `other_tool` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `statut_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `dates` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dossier_id` int(11) NOT NULL,
  `dossierplus` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `publie` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `numerise` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numerise_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `photocopy` text COLLATE utf8_unicode_ci NOT NULL,
  `resp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fiche_texte`
--

INSERT INTO `fiche_texte` (`id`, `titre`, `cote`, `nouvelle_cote`, `ensemble_id`, `type_id`, `annotation`, `addition`, `support_id`, `numbered`, `support_info`, `instrument_id`, `color_id`, `other_tool`, `statut_id`, `genre_id`, `dates`, `dossier_id`, `dossierplus`, `publie`, `numerise`, `numerise_info`, `commentaire`, `photocopy`, `resp_id`) VALUES
(88, '[… comme l\'apogée de la création artistique…]', 'CRLR GR MS 6/A recto', '', 4, 1, '', '', 1, 'oui', '1 f. recto, qui porte le numéro 4. Nous ne possédons ni le début ni la fin de ce manuscrit.', 4, 1, '', 3, 5, '1953 *', 8, '', 'Hermann Leisinger, \'Les peintures étrusques de Tarquinia\', Guilde du Livre, 1953.', 'non', '', '', '', 3),
(89, 'L\'enclave 24 août 17h1/2', 'CRLR GR MS 6/A verso', '', 2, 1, '', '', 1, '', '1 f. verso', 4, 4, '', 1, 6, '1949, 1959 *     ????-08-24', 7, '', '\'Journal\'', 'non', '', 'Jaquier et Delacrétaz datent cette note de 1949 ; selon Maggetti, elle daterait de 1959. Vd. MS 14/46 bis.', '', 3),
(90, '[Hetzen: forcer le gibier]', 'CRLR GR MS 6/A verso', '', 4, 1, '', '', 1, '', '1 f. verso', 4, 2, '', 1, 5, '?', 8, '', '?', 'eventuellement', '', 'Liste de mots allemands avec leurs traductions. Quatre vers (traduits ?) non identifiés.', '', 3),
(91, 'Étoile', 'CRLR GR MS 6/B recto', '', 1, 1, '', '', 1, 'oui', '3 ff., recto', 4, 1, '', 4, 4, '1952-03-03', 4, '', '\'Étoile\', dans \'Repos du cavalier\'', 'eventuellement', '', 'Au-dessus du titre, Roud a noté : \r\n\'En souvenir d\'une halte, d\'une auberge, d\'une étoile… | avec toute mon amitié | Gustave Roud | 3 mars 1952\'', '', 3),
(92, 'Étoile des neiges', 'CRLR GR MS 6/B recto', '', 1, 1, '', '', 1, '', '1 f. recto', 4, 1, '', 2, 4, '1952 *', 4, '', '\'Étoile\', dans \'Repos du cavalier\'', 'eventuellement', '', '', '', 3),
(93, 'Cuilleurs de pommes à Monnéaz', 'CRLR GR MS 6/C recto-verso', '', 1, 2, 'oui', 'oui', 1, '', '3 ff., dont 2 recto/verso', 2, 1, 'stylo à bille, bleu', 3, 4, '1946 *', 4, '', '\'Cueilleurs de pommes à Monnéaz\', Guilde du livre, bulletin mensuel, n° 11, novembre 1946, pp. 278-281.', 'oui', '', 'Au recto : dactylogramme avec ajouts, biffures, commentaires en marge (\'Refaire en moins pompeux\').\r\nAu verso des ff. 2 et 3 : ébauches pour le même texte.', '', 3),
(94, 'Monnéaz 20 mai 48', 'CRLR GR MS 6/C', '', 2, 1, '', '', 6, '', 'Une enveloppe à l\'en-tête du Département politique fédéral, avec des notes manuscrites, au verso.', 1, 6, '', 1, 6, '1948-05-20', 7, '', '\'Journal\'', 'oui', '', '', '', 3),
(95, 'Comme on ajoute', 'CRLR GR MS 6/D', '', 1, 2, 'oui', 'oui', 1, '', '1 f. recto/verso', 2, 1, 'stylo à bille, bleu', 4, 4, '1958, avant', 4, '', '\'Comme on ajoute\', dans \'Repos du cavalier\'', 'eventuellement', '', '', '', 3),
(96, 'Comme on ajoute', 'CRLR GR MS 6/D', '', 1, 1, '', '', 1, '', '2 ff., dont 1 f. bleu et 1 f. recto/verso', 3, 1, 'stylo à bille, bleu', 2, 4, '1958, avant', 4, '', '\'Comme on ajoute\', dans \'Repos du cavalier\'', 'eventuellement', '', '', '', 3),
(97, '[… envisager ce texte…]', 'CRLR GR MS 6/E', '', 2, 1, '', '', 1, '', '1 f. recto', 3, 1, '', 1, 6, '1958, avant', 7, '', 'Texte inédit, transcrit.', 'non', '', 'Lié à \'Comme on ajoute\' ? Pour la cote, le texte, etc.?', '', 3),
(100, 'Campagne perdue', 'CRLR GR MS 9/A', '', 1, 1, '', '', 4, 'oui', 'Vierge. Comporte uniquement un titre sur la couverture. Page 1 à 4 numérotées à la main.', 3, 1, '', 1, 4, '1972-04, avant', 5, '', '\'Campagne perdue\'', 'oui', '', '', '', 1),
(102, 'Campagne perdue', 'CRLR GR MS 9/B', '', 1, 1, '', '', 1, '', '4 ff., dont 3 recto/verso', 5, 3, 'plume, noir', 1, 4, '1972-04, avant', 5, 'Dédicace', '\'Campagne perdue\'', 'oui', '', 'Ebauche de mise en page de titre, dédicace et citation du \'King Lear\' de Shakespeare.', '', 1),
(103, 'Campagne perdue, 1919-1969', 'CRLR GR MS 9/C', '', 1, 2, 'oui', 'oui', 1, 'oui', '41 ff., dont 2 recto/verso, plus page de titre', 2, 1, 'Premières lettres dactylographiées en rouge. Plume, noir ; stylo feutre, bleu ; crayon, gris.', 2, 4, '1972-04, avant', 5, 'Journal', '\'Campagne perdue\'', 'oui', '', 'Un fragment commençant par «Ô vestiges épars et sans vertu!» est écrit à la main, sur le verso du feuillet 1, et le recto du feuillet 2. Les feuillets 1 à 4 sont des versions de travail du début de «Campagne perdue», tels qu\'on peut aussi les lire dans «Prélude à Campagne Perdue», Gazette de Lausanne, 3-4 octobre 1970. Le feuillet 5 reprend «Pages d\'extrême-automne», Suisse romande, no 6, janvier 1940. Le passage se retrouvera dans la version définitive de CP. Les feuillets 6 à 8, 11 à 16, 18 à 24 reprennent des notes du Journal. Les trois paragraphes du feuillet 9 proviennent de «Dictées», Bulletin mensuel de la Guilde du livre, no 7, juillet 1940. Ils seront conservés dans la version finale de CP. Le feuillet 10 provient de «Dictée», Pages, 1ère année, no 4, octobre 1941 et figure dans la version finale de CP. Le feuillet 17 est repris de «Voies étranges du souvenir...», C. F. Ramuz, Lausanne, Max Roth, 1967. Il ne figure pas dans la version finale de CP. Le dernier paragraphe, biffé, du feuillet 25, a été ajouté en 1950 à «Feuillets» et provient de «Cendres», Aujourd’hui, no 32, 10 juillet 1930. Il ne figure pas dans la version finale de CP. Le feuillet 26 reprend «Visite au dragon Rameyer», Guilde du livre, bulletin mensuel, no 3, mars 1946. Le texte figure dans la version finale de CP. Le feuillet 27 comporte trois paragraphes. Le premier vient de «L’arbre qui tombe» Aujourd’hui, no 5, 2 janvier 1930, rubrique « Note ». Le deuxième et le troisième proviennent de «Rapsodie», Aujourd’hui, n°61, 29 janvier 1931. Les trois fragments figurent dans la version finale de CP. Le feuillet 28 reprend le texte «Brouillard», Aujourd’hui, no 13, 27 février 1930. Il n\'est pas repris dans la version définitive de CP. Le feuillet 29 reprend «Sursis», Aujourd’hui, no 6, 9 janvier 1930. Il figure dans la version finale de CP. Le feuillet 30 reprend le texte «Bucheron du printemps», Aujourd’hui, no 76, 14 mai 1931. Il n\'est que partiellement repris dans la version finale de CP. Le feuillet 31 reprend un passage d\'« Écrit à Carrouge », Aujourd’hui, no 81, 18 juin 1931. Et un autre de «Choses», Aujourd’hui, no 2, 12 décembre 1929. Ils figurent dans la version finale de CP. Le feuillet 32 reprend deux paragraphes de  «Cendre», in Aujourd’hui, no 32, 10 juillet 1930. Ils ne sont pas repris dans la version finale de CP. Le troisième paragraphe vient de  «Ecrits à Carrouge», Aujourd’hui, no 59, 15 janvier 1931. Il figure dans la version finale de CP. Le feuillet 33 reprend un paragraphe de ["Une femme (Catherine Mansfield)], Aujourd’hui, no 31, 3 juillet 1930. Le reste du feuillet reprend «[D\'un carnet d\'été/Moulin de Lussery]» Suisse romande, 2e série, no 4, septembre 1938. Ils figurent dans la version finale de CP. Le troisième et dernier paragraphe reprend un passage du Journal (7 août 1933), déjà repris dans «D\'un carnet d\'été / Moulin de Lussery]» Suisse romande, 2e série, no 4, septembre 1938, mais qui ne figure pas dans CP. Le premier paragraphe du feuillet 34 reprend un passage de «Adieux», Aujourd’hui, no 43, 25 septembre 1930. Le second paragraphe vient de «Rapsodie», Aujourd’hui, n°61, 29 janvier 1931. Ils figurent dans la version finale de CP. Le troisième paragraphe vient de «Écrit à Carrouge», Aujourd’hui, no 59, 15 janvier 1931. Il ne sera pas repris dans la version finale de CP. Le premier paragraphe du feuillet 35 vient de «Sur cette route qui mène à un présent éternel», Journal de Genève, 15 avril 1972. Il figure dans la version finale de CP. Le deuxième paragraphe est repris de «Adieux», Aujourd’hui, no 43, 25 septembre 1930. Il figure dans la version finale de CP. Les deux fragments du feuillet 36 proviennent de «Calendrier», Aujourd’hui, no 39, 28 août 1930. Ils figurent dans la version finale de CP. Le paragraphe du feuillet 37 provient de «Calendrier», Aujourd’hui, no 29, 19 juin 1930. Il figure dans la version finale de CP. Les feuillets 38 à 40 reprennent «Visite au dragon Ramseyer», Guilde du livre, bulletin mensuel, no 3, mars 1946. Le texte figure dans la version finale de CP. Le feuillet 41 reprend «Jeunes paysans dans la lumière», Vie, no 4, 1953, pp. 10-11. Il figure dans la version finale de CP.', '', 1),
(104, 'Campagnes perdues, inventaire (journaux)', 'CRLR GR MS 9/D', '', 1, 1, '', '', 1, '', '1 f. recto/verso', 3, 1, '', 2, 4, '1972-04, avant', 5, '', '\'Campagne perdue\'', 'oui', '', 'Inventaire des passages du journal à reprendre dans \'Campagne perdue\'. Au  verso, une note sur la composition de \'Campagne perdue\'.', '', 1),
(105, 'Adieu', 'CRLR GR MS 0', '', 1, 1, '', '', 1, 'oui', '14 ff., avec numérotation de pages de droite (impaires) allant de 7 à 25.', 7, 1, '', 4, 4, '1927-06', 10, '', 'Adieu, Verseau, 1927.', 'oui', '', 'Le CRLR conserve ce document sous forme de photocopies des pages de droite uniquement.\r\nLe manuscrit original appartient à Julien Bogousslavsky. \r\nL\'édition originale porte un achevé d\'imprimer du 12 décembre 1927. A la fin du texte, on lit "Novembre 1922 Juillet 1927".\r\nLe passage de Lycophron, Alexandra, 1-7 (Alexandra, 2-10 dans éd. 1944 et 1950) est donné intégralement en grec.', 'oui', 2),
(106, 'Ecrit à Carrouge. (La Visite du) Moulin', 'CRLR GR  MS 1/A', '', 3, 1, 'oui', '', 1, '', '2 ff. Le texte court du premier f. recto au second f recto ; au recto du premier feuillet se trouve la fin du texte ainsi que la signature de Roud. Un partie du texte manque (celle allant de la fin de l\'avant-dernier § au début du dernier §).', 3, 1, '', 3, 4, '1931-10, avant *', 11, 'Visite au moulin', 'dans Aujourd\'hui, n° 99, 22 octobre 1931, pp. 1-2.', 'eventuellement', '', 'Ce texte se retrouve dans \'Campagne perdue\'.', '', 2),
(107, 'Ordre de succesion, Essai de mise en place', 'CRLR GR MS 9/E', '', 1, 1, '', '', 1, '', '1 f.', 3, 1, '', 2, 4, '1972-04, avant', 5, '', '\'Campagne perdue\'', 'oui', '', 'Plan du recueil \'Campagne perdue\' , avec les premiers mots de chaque chapitres.', '', 1),
(108, 'Mirage d\'hiver', 'CRLR GR MS 9/E', '', 1, 2, 'oui', '', 1, '', '3 ff.', 3, 1, '', 6, 4, '1945, début', 5, 'Mirage d\'hiver', '"Mirage d\'hiver",  Guilde  du livre, bulletin mensuel, N°2, février 1945, pages 18-20.', 'non', '', '', '', 1),
(109, '[Essai d\'utilisation de l\'image de l\'Eternel, La voix me parle d\'une fiancée morte]', 'CRLR GR MS 9/E', '', 1, 1, '', '', 1, '', '1 f. recto', 1, 6, '', 3, 4, '1967-06 et 1972-04', 5, 'Mirage d\'hiver', '"Mirage d\'hiver",  Guilde  du livre, bulletin mensuel, N°2, février 1945, pages 18-20.', 'eventuellement', '', 'Au verso, des notes de journal.', '', 1),
(110, '[Dimanche 4 juin 67] et [Battoir de C. 5 juin 67]', 'CRLR GR MS 9/E', '', 2, 1, '', '', 1, '', '1 f. verso', 5, 1, '', 1, 6, '1967-06-4/5', 7, '', '\'Journal\'', 'eventuellement', '', 'Au recto, "essai d\'utilisation du Mirage de l\'éternel".', '', 1),
(111, '[Je ne supporte pas ce chagrin qui te mine depuis la mort de ta fiancée]', 'CRLR GR MS 9/E', '', 13, 1, '', '', 1, '', '1 f. recto', 4, 1, 'stylo feutre, noir', 1, 6, '?', 9, '', '', 'eventuellement', '', 'Contient une citation du poème "Un être en marche", de Jules Romain, également citée dans le Journal le 5 juin 1967. Et une allusion à la fiancée morte de Novalis. Transcrit.', '', 1),
(112, 'La lampe éteinte et la chanson perdue', 'CRLR GR MS MS9/F', '', 1, 2, 'oui', '', 1, 'oui', '3 ff., partiellement numérotés', 2, 1, 'Stylo à bille, bleu. La première lettre du dactylogramme est en rouge.', 4, 4, '1957, vers *', 5, 'La lampe éteinte et la chanson perdue', '"La lampe éteinte et la chanson perdue", La Gazette littéraire, 20-21 avril 1957.', 'eventuellement', '', '', '', 1),
(113, '[… un crayon d\'or…]', 'CRLR GR MS 1/B', '', 3, 2, '', 'oui', 1, '', '1 f., fragment', 2, 1, 'Machine à écrire, rouge ; plume, noir ; crayon, gris', 3, 3, '1932, après *', 11, 'Visite au moulin', '"Visite au moulin": dans Aujourd\'hui, n° 99, 22 octobre 1931, pp. 1-2 ; Petit traité de la marche en plaine, Mermod, 1932, pp. 63-71.', 'non', '', 'Fragment d\'une lecture-conférence. Après un court passage inédit qui traite de la Tour de la Molière et de sa région, on lit : "(Lecture de "La Visite au moulin" m. e, p. pages 63 à 71.) / J\'ai dédié jadis à mon ami Perrette le récit de cette visite et c\'est à lui que je m\'adresse dans ce fragment. que je vais lire".', '', 2),
(114, 'Notes 1932 ["Cahier de juin" ; Supplément aux notes ; Notes retrouvées]', 'CRLR GR MS 2/A', '', 1, 2, 'oui', 'oui', 1, 'oui', '26 ff., recto. Un f. porte le n° 2, 9 ff. sont numérotés de 1 à 9. Papier pelure et papier bleu.', 2, 1, 'Machine à écrire, rouge ; plume, noir ; crayon, gris ; crayon, rouge.', 3, 4, '1932/1933-11', 2, '', 'Essai pour un paradis, Mermod, 1932.', 'oui', '', 'Notes de journal recopiées et assemblées, en lien avec la partie "Année" d\'Essai pour un paradis. Première part., 15ff retravaillés à l\'encre noire et au crayon. Part. ""Supplément aux notes"", 9ff numérotés de 1 à 9. Part. ""Notes retrouvées"", 2ff, papier bleu, dactylographiés et manuscrits à l\'encre noire. Les deux dernières parties sont attachées ensemble.\r\nDates en rouge (sauf pour ""Supplément aux notes"" et ""Notes retrouvées"").\r\nDessin au crayon d\'une ""rose de palme"" découpé d\'un carnet (du journal?).\r\nSeul le début est retravaillé et correspond partiellement à Essai pour un paradis(pp. 22-27).\r\nAdjonction autogr. d\'une note de 1933 (de Journal?) inédite.\r\nLes différents dossiers ne datent donc pas tous de la même période.', '', 2),
(115, 'Deux poëmes pour Aimé ["Sommeil" et "Bain du soir"]', 'CRLR GR MS 2/B', '', 1, 3, 'oui', '', 1, 'oui', '3 ff.', 3, 1, '', 7, 4, '1932, après *', 2, 'Sommeil, Bain', 'Essai pour un paradis, Mermod, 1932, pp. 42-44 et 47-48.', 'oui', '', 'Poèmes découpés de l\'éditon originale d\'Essai pour un paradis.\r\nMention sur le f.1 "(tirés de l\'Essai pour un Paradis)".\r\nTitres dactylographiés en rouge.\r\nUne seule correction à la plume.\r\nSignature de l\'auteur.', '', 2),
(116, 'Hommage. Toute-puissance de la poésie Scène', 'CRLR GR MS 3', '', 3, 2, 'oui', '', 1, 'oui', '12 ff., recto', 2, 1, 'plume, noir ; crayon, gris', 4, 4, '1936-09/10', 9, 'Hommage Toute-puissance de la poésie (Scène)', '', 'eventuellement', '', 'A la fin du texte: "Forêt de Champrenaz / Septembre-Octobre 1936".\r\nLe  contenue du f.10 est réécrit proprement sur le f.11.', '', 2),
(117, 'Bain d\'un faucheur', 'CRLR GR MS 4/A', '', 1, 2, '', '', 1, '', '2 ff. recto', 2, 1, 'machine à écrire, rouge ; plume, noir. Titre et première lettre en rouge.', 4, 4, '', 12, 'Bain d\'un faucheur', 'dans Présence, n° 1, février 1935, pp. 5-6', 'oui', '', '', '', 2),
(118, 'Epaule', 'CRLR GR MS 4/B', '', 1, 2, '', '', 1, 'oui', '3 ff. recto', 2, 1, 'machine à écrire, rouge ; plume, noir. Titre et première lettre en rouge. La date et les numéros de page sont inscrits à la plume à encre noire.', 4, 4, '1940-11', 12, 'Epaule', 'Pour un moissonneur, Aujourd\'hui, 1941, pp. 21-25.', 'oui', '', '', '', 2),
(119, 'Dédicace', 'CRLR GR MS 4/C', '', 1, 2, '', '', 1, '', '1 f. recto', 2, 1, 'machine à écrire, rouge. Titre et première lettre en rouge.', 4, 4, '1941-04, avant *', 12, 'Dédicace', 'Pour un moissonneur, Aujourd\'hui, 1941, p. 11', 'oui', '', '', '', 2),
(120, 'Laboureur au repos', 'CRLR GR MS 4/D', '', 1, 2, '', '', 1, 'oui', '4 ff. recto', 2, 1, 'Plume, noir. Titre et première lettre en rouge.', 4, 4, '1940-12', 12, 'Laboureur au repos', 'Pour un moissonneur, Aujourd\'hui, 1941, p. 35-40.', 'oui', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(1, 'Critique littéraire'),
(2, 'Critique d’art'),
(3, 'Chronique'),
(4, 'Oeuvre poétique'),
(5, 'Traduction'),
(6, 'Note'),
(7, 'Divers');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `id` int(11) NOT NULL,
  `instrument` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`id`, `instrument`) VALUES
(1, 'crayon'),
(2, 'machine à écrire'),
(3, 'plume'),
(4, 'stylo à bille'),
(5, 'stylo feutre'),
(6, 'divers'),
(7, 'à determiner');

-- --------------------------------------------------------

--
-- Table structure for table `resp`
--

CREATE TABLE `resp` (
  `id` int(11) NOT NULL,
  `resp` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resp`
--

INSERT INTO `resp` (`id`, `resp`) VALUES
(1, 'JB'),
(2, 'AC'),
(3, 'BP');

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE `statut` (
  `id` int(11) NOT NULL,
  `statut` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`id`, `statut`) VALUES
(1, 'note'),
(2, 'plan'),
(3, 'brouillon'),
(4, 'mise au net'),
(5, 'manuscrit définitif'),
(6, 'corrections sur épreuves'),
(7, 'original corrigé'),
(8, 'autre');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `support` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `support`) VALUES
(1, 'feuillet'),
(2, 'agenda'),
(3, 'carnet'),
(4, 'cahier'),
(5, 'carte'),
(6, 'divers');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'manuscrit'),
(2, 'dactylogramme'),
(3, 'imprimé');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblio_ouvrages`
--
ALTER TABLE `biblio_ouvrages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ensemble`
--
ALTER TABLE `ensemble`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiche_texte`
--
ALTER TABLE `fiche_texte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resp`
--
ALTER TABLE `resp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biblio_ouvrages`
--
ALTER TABLE `biblio_ouvrages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ensemble`
--
ALTER TABLE `ensemble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `fiche_texte`
--
ALTER TABLE `fiche_texte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resp`
--
ALTER TABLE `resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `statut`
--
ALTER TABLE `statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
