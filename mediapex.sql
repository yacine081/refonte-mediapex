-- phpMyAdmin SQL Dump
-- version 4.1.4
-- https://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Février 2016 à 22:31
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mediapex`
--

-- --------------------------------------------------------

--
-- Structure de la table `mx_panier`
--

CREATE TABLE IF NOT EXISTS `mx_panier` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `mx_panier`
--

INSERT INTO `mx_panier` (`id`, `ip`, `date`, `service`) VALUES
(1, '127.0.0.1-28.03.2013', '28.03.2013 a 13:39', 'Site vitrine');

-- --------------------------------------------------------

--
-- Structure de la table `mx_references`
--

CREATE TABLE IF NOT EXISTS `mx_references` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordre` int(11) NOT NULL DEFAULT '0',
  `classement` varchar(100) DEFAULT NULL,
  `presentation` text,
  `travaux_fr` text,
  `travaux_en` text,
  `pays` varchar(50) DEFAULT NULL,
  `annee` varchar(50) DEFAULT NULL,
  `partenaire` varchar(100) DEFAULT NULL,
  `epse` varchar(100) DEFAULT NULL,
  `photo1` varchar(100) DEFAULT '0',
  `photo2` varchar(100) DEFAULT '0',
  `site` varchar(100) DEFAULT NULL,
  `photo4` varchar(100) DEFAULT NULL,
  `photo5` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Contenu de la table `mx_references`
--

INSERT INTO `mx_references` (`id`, `ordre`, `classement`, `presentation`, `travaux_fr`, `travaux_en`, `pays`, `annee`, `partenaire`, `epse`, `photo1`, `photo2`, `site`, `photo4`, `photo5`) VALUES
(1, 0, 'crea', 'La 2SC2I est une société sénégalaise de prestation de services et de conseils en Ingénierie Informatique. Pours ses cartes de vœux, cartes de visite, calendriers, chevalets, dépliants et roll-ups, la 2SC2I a fait confiance à Médiapex.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012 à 2013', 'MyPrinters', '2SC2I', '2sc2i1', '2sc2i2', NULL, NULL, NULL),
(2, 0, 'crea', 'Actu Auto Magazine est une revue sénégalaise consacrée à l’automobile. Il doit paraître en 2015 et se distinguera également par son design réalisé par notre studio graphique', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2014', 'Mark''Events', 'Actu Auto Magazine', 'aamag1', 'aamag2', NULL, NULL, NULL),
(3, 0, 'crea', 'La fondation ADDA veut apporter des solutions innovantes qui contribueront à l’amélioration de la qualité de vie des populations africaines en développant des stratégies\nen partenariat avec des organisations locales pour assurer un développement économique et social. Les dépliants de cette fondation ont été gratuitement réalisés par Médiapex.', 'Créations Graphiques\r\n', NULL, 'Suisse', '2010', 'Mark''Events', 'ADDA', 'adda1', 'adda2', NULL, NULL, NULL),
(4, 0, 'crea site', 'ALM TEAM CONSULTING est une agence digitale basée à Paris. ALM TEAM est un partenaire privilégié de Médiapex concernant les travaux de création graphiques, mais également de sites web et d''applications mobiles.\r\n', 'Site Internet - Créations Graphiques \r\n', NULL, 'France', '2014', NULL, 'Alm Team Consulting', 'alm1', 'alm2', 'templates.mediapex.net/almteam', NULL, NULL),
(5, 0, 'crea', 'Axa Assurances est le leader sénégalais de l''assurance dommages. Il offre à tous - particuliers, professionnels, entreprises, associations - une gamme complète de produits d''assurance des biens et des personnes (auto, moto, habitation, bateau, chasse, responsabilités, protection de la famille, santé, prévoyance, protection juridique, assistance). Axa a confié à Médiapex la création graphique de ses roll-ups.\r\n', 'Créations Graphiques', NULL, 'Sénégal', '2010', 'Mark''Events', 'Axa Assurances', 'axa1', 'axa2', NULL, NULL, NULL),
(6, 0, 'crea', 'Belleza Negra (Beauté Noire en français) est une firme de mode basée en Guinée Equatoriale.\r\n', 'Créations Graphiques\r\n', NULL, 'Guinée Equatoriale', '2014', NULL, 'Belleza Negra', 'belleza1', 'belleza2', NULL, NULL, NULL),
(7, 0, 'crea', 'Le domaine d’activité principal de la BHS ( Banque de l’Habitat du Sénégal) est le financement de l’immobilier, en accession à la propriété, avec une priorité pour le logement social. Dans le cadre ses differentes campagnes promotionnelles, Médiapex s''est vu confié par la BHS la création graphique pour les besoins de celles-ci (dépliants, chemises à rabats, calendriers, adaptations ...\r\n', 'Créations Graphiques', NULL, 'Sénégal', '2011 à 2012', 'Mark''Events', 'Banque de L''Habitat du Sénégal', 'bhs1', 'bhs2', NULL, NULL, NULL),
(8, 0, 'crea', 'Blue Skies fabrique ses produits et les\nlivre en Europe depuis 1998. La société s''est développé avec l’engagement de fournir à ses clients des fruits préparés d’une très grande qualité. Blue skies a fait confiance à médiapex pour l''élaboration de ses flyers.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2013', 'MyPrinters', 'Blue Skies', 'skies1', 'skies2', NULL, NULL, NULL),
(9, 0, 'crea', 'Bonilait Protéines est un des leaders français et européens dans la fabrication et la distribution d’ingrédients laitiers réengraissés en poudre destinés à l’industrie alimentaire.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2009 à 2010', 'Payoss', 'Bonilait', 'bonilait1', 'bonilait2', NULL, NULL, NULL),
(10, 0, 'crea site edition marketing app', 'Le C2I (Centre d''Informations pour l''Intégration) est un acteur de la mobilité internationale étudiante basé au Sénégal. Sa vocation est de promouvoir les études à l''étranger et d''accompagner les étudiants, lycéens, stagiaires, jeunes diplômés et professionnels dans leur projet d''études. Toute la communication Globale de C2I a été confié à Médiapex (site internet dynamique, community management, dépliants, flyers, cartes de visite, logo, enseignes, plaques, application de gestion des dossiers ...)\r\n', 'Site Internet - Créations Graphiques - Community Management - Stratégie Marketing - Application', NULL, 'Sénégal', '2013 à 2014', NULL, 'C2I Sénégal', 'c2i1', 'c2i2', 'c2isenegal.com', NULL, NULL),
(11, 0, 'crea edition marketing', 'Capital Conseil (Capco) est une société d''assistance juridique comptable et fiscale. sa mission consiste également à trouver et à mettre en place les solutions de financement optimales qui permettront de contribuer à la croissance de votre entreprise. La communication globale de cette société à été confié à Médiapex c''est-à-dire de la création du logo et la mise en execution de la stratégie marketing.\r\n', 'Créations Graphiques - Stratégie Marketing\r\n', NULL, 'Sénégal', '2014', NULL, 'Capital Conseil', 'capco1', 'capco2', NULL, NULL, NULL),
(12, 0, 'crea', 'Médiapex a conçu pour ce cabinet d''expertise comptable et de Consultance un nouveau logo et une version restylée de la présentation des états financiers de ses clients.\r\n', 'Créations Graphiques', NULL, 'Sénégal', '2009', NULL, 'CEC', 'cec1', '0', NULL, NULL, NULL),
(13, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, NULL, 'C''est ICI suarl', 'cici1', 'cici2', NULL, NULL, NULL),
(14, 0, 'crea site', 'Chronomark est un portail des entreprises du Sénégal', 'Site Internet - Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'Mark''Events', 'ChronoMark', 'chrono1', 'chrono2', NULL, NULL, NULL),
(15, 0, 'crea edition marketing', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, NULL, 'Iba Events', 'ibaevents1', 'ibaevents2', NULL, NULL, NULL),
(16, 0, 'crea', 'Al Irchaad, c’est le nom de l’institut créé par Serigne Moustapha Sy, Responsable Moral du Dahiratoul Moustarchidine Wal Moustarchidaty. Il demeure, un cadre privilégié pour assurer  la continuité et l’approfondissement de la mission du Dahira qui consiste à former des jeunes musulmans moralement encadrés, intellectuellement armés et socialement utiles pour relever les défis de leur temps.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2011', NULL, 'Ecole Al Irchaad', 'irchaad1', 'irchaad2', NULL, NULL, NULL),
(17, 0, 'crea', 'Espace Assurances, la branche assurance du groupe CCBM a confiance à Médiapex pour ses travaux en  matière de crétation graphiques (Branding intérieur - Autocollants - Enseigne - Cartes de visite - En-têtes - Chemises à rabat - Plaque - Roll Up …)\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2011', 'Mark''Events', 'Espace Assurances', '0', '0', NULL, NULL, NULL),
(18, 0, 'crea', 'Société de distribution alimentaire.', 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, NULL, 'Ets Ibrahima Diop', 'etsibrahimadiop1', 'etsibrahimadiop2', NULL, NULL, NULL),
(19, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, 'Mark''Events', 'Global Actions', '0', '0', NULL, NULL, NULL),
(20, 0, 'crea', 'En service depuis 2008, la Société Eydon Petroleum est spécialisée dans la distribution d’hydrocarbures raffinés.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'MyPrinters', 'Eydon', 'eydon1', 'eydon2', NULL, NULL, NULL),
(21, 0, 'crea site', 'La Foire du Bâtiment et de l''Immobilier (F.B.I) est un grand moment de rencontre et d’échange regroupant des exposants appartenant aux domaines d’activités précités.\r\n', 'Site Internet - Créations Graphiques \r\n', NULL, 'Sénégal', '2012', 'Mark''Events', 'Foire du Bâtiment et de l''Immobilier', 'fbi1', 'fbi2', 'portfolio.mediapex.net/FBI', NULL, NULL),
(22, 0, 'crea', 'La ferme Yaye Fatou a confié à Médiapex la confection de son logo, ses cartes de visites ainsi que de ses stickers pour le conditionnement de ses poulets de chairs.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2014', NULL, 'Ferme Yaye Fatou', '0', '0', NULL, NULL, NULL),
(23, 0, 'crea marketing', 'Dans le cadre de la promotion des activités culturelles de Dakar Plateau, Le Festival Hip Hop Evene vient rétrécir la faussée qui existe entre les ténors et les nouveaux talents du mouvement hip hop au Sénégal en offrant à ces derniers la possibilité de se produire sur scène avec les ténors ou même d’enregistrer un album dans un « vrai » studio.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010', NULL, 'Festival Hip Hop Evene', '0', '0', NULL, NULL, NULL),
(24, 0, 'crea app', 'African Sun Style est une entreprise de confection d''habillement orientée sur le style tradionnel africain. Son logo, ses cartes de visite, ses flyers et son application de gestion de commerciale ont été réalisés par Médiapex.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', NULL, 'African Sun Style', '0', '0', NULL, NULL, NULL),
(25, 0, 'crea', 'Global Fund for Children transforme la vie des enfants victimes de la traite ou de la guerre ainsi que les enfants-travailleurs et les aide à retrouver leurs droits et de poursuivre leurs rêves. Depuis 1997, GFC a atteint 9 millions d''enfants dans le monde entier. Les brochures de l''atelier d’échanges "Knowledge Exchange West Africa 12" tenue à Dakar en 2012 ont été réalisés par Médiapex.', 'Créations Graphiques\r\n', NULL, 'USA', '2012', 'MyPrinters', 'Global Fund for Children', 'gfc1', 'gfc2', NULL, NULL, NULL),
(26, 0, 'crea', 'L''Institut Africain de Management est une école de commerce de renom qui reste toujours fidèle à sa mission qui est non seulement de former une nouvelle génération de managers et de leaders africains, mais aussi celle de renforcer son engagement militant et citoyen en faveur de la promotion d’un enseignement supérieur de qualité accessible à tous. ', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2011', 'Mark''Events', 'IAM', '0', '0', NULL, NULL, NULL),
(27, 0, 'crea', 'L''INSTA est une école qui intervient depuis plus de 15 ans dans le domaine de l''ingénierie des compétences à forte composante d''innovations technologiques en faveur de l''emploi. \r\n', 'Créations Graphiques\r\n', NULL, 'France', '2014', 'Alm Team', 'INSTA', 'insta1', 'insta2', NULL, NULL, NULL),
(28, 0, 'crea', 'Kansala société d''exploitation minière basée au Sénégal et en Afrique du Sud a confié à Médiapex son identité visuelle (logo, cartes de visite, en-tête, documents internes …)\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal - Afrique du Sud', '2010', NULL, 'Kansala Ressources Sa', 'kansala1', 'kansala2', NULL, NULL, NULL),
(29, 0, 'crea', 'L’Athénée est un centre d’accompagnement et de soutien scolaire réunissant les meilleures conditions par son environnement favorable et ses intervenants de qualité pour accompagner les élèves dans leurs devoirs du soir, les conseiller afin de prendre de bonnes habitudes de travail, les aider pour parfaire leurs connaissances ou préparer leurs examens. \r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2013', 'MyPrinters', 'Lathénée', 'athenee1', 'athenee2', NULL, NULL, NULL),
(30, 0, 'crea site', 'Le mouvement Layene Family a confié la mise en page de son magazine trimestriel qui est une revue consacrée à la Communauté Islamique en général et Layene. Il est distribué au Sénégal mais aussi en Europe et aux Etats-Unis. Le site internet est en cours de développement (refonte).', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012 à 2014', NULL, 'Layene Family', '0', '0', NULL, NULL, NULL),
(31, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, NULL, 'Les Ballets d''Afrique Noire', '0', '0', NULL, NULL, NULL),
(32, 0, 'crea', 'Les p''tits loups est une école maternelle basée au Cameroun.', 'Créations Graphiques\r\n', NULL, 'Cameroun', '2014', NULL, 'Les p''tits loups', '0', '0', NULL, NULL, NULL),
(33, 0, 'crea', 'Le lycée Jean Mermoz est l''un des trois lycées français de Dakar reconnus par le ministère de l''Éducation nationale. L''établissement possède une école primaire et un collège.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'MyPrinters', 'Lycée Jean Mermoz', 'jeanmermoz1', 'jeanmermoz2', NULL, NULL, NULL),
(34, 0, 'crea site edition', 'MARK’EVENTS est une agence spécialisée dans la communication globale et l’événementiel. La force de MARK''EVENTS réside dans le respect des clients et la passion de notre métier avec pour leitmotiv : réactivité, proximité, disponibilité, pertinence, émotion et audace. Cette adéquation avec les valeurs de Médiapex en ont fait son partenaire privilégié en matière de création graphique.\r\n', 'Créations Graphiques -  Edition\r\n', NULL, 'Sénégal', '2009 à 2014', NULL, 'Mark''Events', 'markevents1', 'markevents2', 'markevents.net', NULL, NULL),
(35, 0, 'crea site', 'La MISSION EVANGELIQUE ARMEE DES SANCTIFIES (M.E.A.S) est  une église prophétique et apostolique ayant pour but de ramener les gens auprès du Seigneur à travers la parole selon qu’il est écrit. L''église a fait confiance à Médiapex pour la refonte de  et la création des affiches de ses différents évenements.\r\n', 'Site Internet - Créations Graphiques', NULL, 'Lumembourg', '2014', 'Alm Team', 'MEAS Luxembourg', 'meas1', 'meas2', 'meas-luxembourg.com', NULL, NULL),
(36, 0, 'crea', 'La MISSION ÉVANGÉLIQUE ARMÉE DES SANCTIFIES (M.E.A.S) est une assemblée Chrétienne évangélique ayant pour but et mission, de gagner des âmes, en ramenant des hommes et des femmes auprès du Seigneur Jésus-Christ à travers sa parole.', 'Créations Graphiques\r\n', NULL, 'France', '2014', 'Alm Team', 'MEAS Paris', 'measparis1', 'measparis2', NULL, NULL, NULL),
(37, 0, 'crea', 'Le logo de Médiacom, agence de communication de renom, a été réalisé par Médiapex.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'MyPrinters', 'Mediacom', 'mediacom1', 'mediacom2', NULL, NULL, NULL),
(38, 0, 'site', 'Basé au Canada, MM Technology Inc., a pour mission d’être le chef de file africain en termes de moyens de paiement mobile, électronique et sans contact. Son leadership repose sur l’innovation de la solution MoneyCell et sur le caractère innovant de la solution MoneyCell, sur les plans de la sécurité, de la flexibilité et de l’accessibilité a partir d’un téléphone cellulaire. MM Technology a fait confiance à Médiapex pour la réalisation de son site internet.\r\n', 'Site Internet\r\n', NULL, 'Canada', '2014', NULL, 'MM Technology', 'mm1', 'mm2', 'templates.mediapex.net/mm-techno', NULL, NULL),
(39, 0, 'crea site', 'MyPrinters est une agence de conseil en communication indépendante qui privilégie la proximité et la réactivité. Réunissant des équipes multimétiers, MyPrinters adopte une approche créative et opérationnelle globale, dans tous les domaines de la communication.\nEngagée dans une démarche unique de développement durable, MyPrinters revendique surtout pour ses clients une nouvelle approche responsable et efficace de leur communication. MyPrinters a fait confiance à Médiapex pour bon nombre de travaux en matière de création graphique.', 'Site Internet - Créations Graphiques', NULL, 'Sénégal', '2012 à 2014', NULL, 'My Printers', 'printers1', 'printers2', 'portfolio.mediapex.net/myprinters.sn', NULL, NULL),
(40, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal - France', '2010', 'Mark''Events', 'NSIBC', 'nsibc1', 'nsibc2', NULL, NULL, NULL),
(41, 0, 'crea', 'N''tifafa est un institut de beauté basé à Dakar. Il a confié à Médiapex l''élaboration de ses cartes de visite, brochures et enseignes …\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010 à 2011', 'Mark''Events', 'N''tifafa bien être', 'ntifafa1', 'ntifafa2', NULL, NULL, NULL),
(42, 0, 'crea marketing', 'Objis, le leader français de la formation Java, a confié à Médiapex la communication globale de sa filiale sénégalaise. Cela inclut entre autres tous les travaux de création graphique, de stratégie marketing et de community management.', 'Créations Graphiques - Edition - Community Management', NULL, 'Sénégal', '2014', NULL, 'Objis Sénégal', 'objissn1', 'objissn2', NULL, NULL, NULL),
(43, 0, 'crea', 'Objis, le leader français de la formation Java, a confié à Médiapex la confection des brochures 2014-2015 de sa filiale congolaise pour les sessions 2014 - 2015.', 'Créations Graphiques\r\n', NULL, 'Congo', '2014', NULL, 'Objis Congo', 'objiscongo1', 'objiscongo2', NULL, NULL, NULL),
(44, 0, 'crea', 'La Fédération Sénégalaise des Sports Équestres regroupe les pratiquants sportifs au sein de cinq associations et centres équestres fédéraux implantés essentiellement dans la capitale Dakar. Médiapex s''est vu confié la conception et l''édition d''affiches de la part de la fédé dans le cadre d''une journée des pasionnés du cheval.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010', NULL, 'FSSE', 'fsse1', 'fsse2', NULL, NULL, NULL),
(45, 0, 'crea', 'Palen''s est un magasin qui vous propose toute la mode, chaussures, vêtements et accessoires, selon les dernières tendances, et en accord avec votre style : looks casuals ou urbains, silhouettes décontractées ou plus sophistiquées. \r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, 'Payoss', 'Palen''s', 'palens1', 'palens2', NULL, NULL, NULL),
(46, 0, 'crea', 'PAMECAS est une institution de microfinance sénégalaise délivrant des services financiers aux populations n’ayant pas accès au système bancaire classique. Pour ses Roll-Up et ses banderoles dans le cadre d''une de ses campagnes de communication.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010', 'Mark''Events', 'Pamecas', 'pamecas1', 'pamecas2', NULL, NULL, NULL),
(47, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, NULL, 'Payoss', 'payoss1', 'payoss2', NULL, NULL, NULL),
(48, 0, 'crea', 'Partners Of Africa (POA) est une agence de communication internationale. Partenaire privilégié de Médiapex, POA a confié à ce dernier la création de son logo, ses flyers, affiches, dépliants  et cartes de visite\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2009 à 2014', NULL, 'Partners of Africa', 'poa1', 'poa2', NULL, NULL, NULL),
(49, 0, 'crea', 'Feelin'' Style est une chaine de distribution de produits de beauté basée au Sénégal.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2011', 'Mark''Events', 'Feelin Style', 'feelin1', 'feelin2', NULL, NULL, NULL),
(50, 0, 'crea', 'Centre de sport et de loisirs regroupant plusieurs activités sportives et culturelles pour adultes et enfants : fitness, danse, karaté, boxe, yoga, self-défense ...', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2013', NULL, 'RECRE''ACS', 'recreacs1', 'recreacs2', NULL, NULL, NULL),
(51, 0, 'crea', 'Le Réseau Experts France-Maghreb est une association créée en 2002 à Paris par des experts-comptables d’origine maghrébine. Elle vise à développer les relations France-Maghreb et créer une solidarité et une entraide entre les membres du Réseau.', 'Créations Graphiques\r\n', NULL, 'France - Maroc', '2014', 'Alm Team', 'REFM', 'refm1', 'refm2', NULL, NULL, NULL),
(52, 0, 'crea', 'SALAMA Assurances Sénégal vous accompagne et vous assiste grâce à une équipe composée d’ingénieurs, de juristes et de conseillers spécialisés dans chaque branche d’assurance. Nous leur avons fait des Roll-Up pour leur siège social.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010', 'Mark''Events', 'Salama Assurances', 'salama1', 'salama2', NULL, NULL, NULL),
(53, 0, 'crea', 'SCI YAAZ est une société civile immobilière  basée à Dakar. Médiapex s''est vu confié la création de son logo.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2014', NULL, 'Sci Yaaz', 'yaaz1', 'yaaz2', NULL, NULL, NULL),
(54, 0, 'crea site', 'La Sénégalaise des Achats (SDA) est une plateforme sur laquelle les entreprises peuvent exposer leurs produits agricoles. On peut accéder à cette plateforme via le site internet entièrement réalisé par Médiapex.\n', 'Site Internet - Créations Graphiques - Stratégie Marketing\r\n', NULL, 'Sénégal', '2014', NULL, 'Sénégalaise Des Achats', 'sda1', 'sda2', 'sda.sn', NULL, NULL),
(55, 0, 'crea edition', 'La Sénégalaise Des Eaux assure la production et la distribution d''eau dans les principales villes sénégalaises, soit prés de 5 millions d''habitants desservis.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2009', 'Payoss', 'Sénégalaise Des Eaux', '0', '0', NULL, NULL, NULL),
(56, 0, 'crea', 'Sen Assurance est une nouvelle société sénégalaise d''assurance-vie.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'Mark''Events', 'Sen Assurance Vie', '0', '0', NULL, NULL, NULL),
(57, 0, 'crea', 'SGBS (Société Générale de Banques au Sénégal) exerce depuis 1962 à travers son réseau d’agences qui fait d’elle une banque de proximité. Elle intervient dans tous les secteurs de l’économie sénégalaise, se positionnant ainsi en acteur majeur du développement.\nBanque de référence au Sénégal, la SGBS confie très régulièrement ses travaux de créations graphiques à Médiapex (Brochures, affiches, flyers, insertion presse, affichage interne, motion design, shooting, roll up ...)', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010 à 2013', 'Mark''Events', 'SGBS', '0', '0', NULL, NULL, NULL),
(58, 0, 'crea', 'Sonko & Fils, société d''investissement basé à Dakar et en Afrique du Sud a confié à Médiapex son Identité visuelle  (logo, cartes de visite, en-tête, documents internes …)\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal - Afrique du Sud', '2010', NULL, 'Sonko & Fils', '0', '0', NULL, NULL, NULL),
(59, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal - Italie', '2014', 'Mark''Events', 'Sosie', '0', '0', NULL, NULL, NULL),
(60, 0, 'crea', 'Pour ses affiches diffusées sur l''étendu du territoire sénegalais, Tampico a fait confiance à Médiapex.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2013', 'MyPrinters', 'Tampico', '0', '0', NULL, NULL, NULL),
(61, 0, 'crea', 'La société Atlantique spécialisée dans la vente de produits halieutiques à fait faire son logo,  ses affiches et ses flyers chez Médiapex.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2010', NULL, 'Atlantique', '0', '0', NULL, NULL, NULL),
(62, 0, 'crea', 'Sucré Salé est une firme sénégalaise leader dans le domaine du service de traiteur et de la pâtisserie. Pour ses flyers et ses plaques aimantées pour voiture, sucré salé a fait confiance a Médiapex de la conception à la confection.', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2014', NULL, 'Sucré Salé\r\n', '0', '0', NULL, NULL, NULL),
(63, 0, 'site', 'Trainet est un portail web dédié à la formation professionnelle continue. Il a pour objectif d''informer sur les formations et permettre la communication entre professionnels.', 'Site Internet\r\n', NULL, 'Sénégal', '2014', NULL, 'Trainet', 'trainet1', 'trainet2', 'trainet.net', NULL, NULL),
(64, 0, 'crea', 'L''Agence des États-Unis pour le développement international (USAID) est l’agence indépendante du gouvernement des États-Unis chargée de développement économique et de l’assistance humanitaire dans le monde. Nous leur avons confectionné des Planners pour l''année 2013.', 'Créations Graphiques', NULL, 'Sénégal', '2012', 'MyPrinters', 'USAID-Yaajende', 'usaid1', 'usaid2', NULL, NULL, NULL),
(65, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal - Italie', NULL, NULL, 'Veratec Sénégal', '0', '0', NULL, NULL, NULL),
(66, 0, 'crea', 'Verrines et Cupcakes, entreprise spécialisée dans la production et la vente de verrines et de cupcakes a fait appel à Médiapex pour la conception de leur logo.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2014', NULL, 'Verrines & Cup Cake', '0', '0', NULL, NULL, NULL),
(67, 0, 'crea', 'YAFA CONSULTING GROUP est un cabinet de consultance dans le domaine commercial.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2012', 'Mark''Events', 'Yafa Consulting Group', '0', '0', NULL, NULL, NULL),
(68, 0, 'crea', 'Le parfumeur basé aux Etats Unis a confié à Médiapex la confection du packaging de deux modèles de parfum destinés à la gent féminine.', 'Créations Graphiques\r\n', NULL, 'USA', '2012', NULL, 'YK Collection', 'yk1', 'yk2', NULL, NULL, NULL),
(69, 0, 'site', 'Constima International Suarl est une société spécialisée dans la construction, le génie-civil et le terrassement et menant des projets variés : marchand de biens, aménageur foncier, pilotage et coordination de chantier et promotion immobilière. Médiapex a réalisé le site internet de la sociéte.', 'Site Internet\r\n', NULL, 'Sénégal - Italie', '2011', NULL, 'Constima International', 'constima1', 'constima2', NULL, NULL, NULL),
(70, 0, 'crea', 'En facilitant l’accès à des produits de qualité à des prix compétitifs, le groupe CCBM permet à des millions de consommateurs sénégalais d’acquérir des produits et des services jusqu’alors inaccessibles. Pour y parvenir CCBM a confié à Médiapex l''adaptation de dépliants en roll-up et la création de plaques pour ses bureaux.\r\n', 'Créations Graphiques\r\n', NULL, 'Sénégal', '2011 à 2012', 'Mark''Events', 'CCBM', '0', '0', NULL, NULL, NULL),
(71, 0, 'crea', NULL, 'Créations Graphiques\r\n', NULL, 'Sénégal', NULL, 'MyPrinters', 'Logitrans', '0', '0', NULL, NULL, NULL),
(72, 0, 'app', 'Médiapex a développé pour Allianz une application de gestion des moyens de paiement. Nous avons aussi réalisé le logo de L''AEASA (Amicale des Employés de Allianz Sénégal Assurances) et des affiches lors des différents évènements organisés par cette dernière.', 'Créations Graphiques - Application', NULL, 'Sénégal', '2009 à 2014', NULL, 'Allianz Sénégal Assurances', '0', '0', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
