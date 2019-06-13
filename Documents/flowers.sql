-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 13 juin 2019 à 16:53
-- Version du serveur :  10.2.24-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `julihbzn_flowers`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenances`
--

CREATE TABLE `appartenances` (
  `serial_key` varchar(45) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_plante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartenances`
--

INSERT INTO `appartenances` (`serial_key`, `id_user`, `id_plante`) VALUES
('002', 2, 5),
('003', 2, 17),
('004', 2, 4),
('005', 2, 27),
('009', 2, 38);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Cactus'),
(2, 'Plantes grasses'),
(3, 'Fougères'),
(4, 'Plantes vertes'),
(5, 'Plantes d\'origine tropicale'),
(6, 'Arbrisseau'),
(7, 'Plantes à fleurs');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `data_hum` int(11) NOT NULL,
  `data_lum` int(11) NOT NULL,
  `data_temp` int(11) NOT NULL,
  `serial_key` varchar(45) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`id_data`, `data_hum`, `data_lum`, `data_temp`, `serial_key`, `added`) VALUES
(1, 70, 5, 22, '002', '2019-06-10 19:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

CREATE TABLE `plantes` (
  `id_plante` int(11) NOT NULL,
  `nom_plante` varchar(45) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `debut_plantation` varchar(255) DEFAULT NULL,
  `fin_plantation` varchar(255) DEFAULT NULL,
  `debut_floraison` varchar(255) DEFAULT NULL,
  `fin_floraison` varchar(255) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `temp_min` varchar(255) DEFAULT NULL,
  `temp_max` varchar(255) DEFAULT NULL,
  `hum_min` varchar(255) DEFAULT NULL,
  `hum_max` varchar(255) DEFAULT NULL,
  `lumi_min` longtext DEFAULT NULL,
  `lumi_max` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plantes`
--

INSERT INTO `plantes` (`id_plante`, `nom_plante`, `image_name`, `description`, `debut_plantation`, `fin_plantation`, `debut_floraison`, `fin_floraison`, `id_categorie`, `temp_min`, `temp_max`, `hum_min`, `hum_max`, `lumi_min`, `lumi_max`) VALUES
(4, 'Jonquille', 'https://media.ooreka.fr/public/image/plant/1235/mainImage-full-12477733.jpg', 'La jonquille Narcissus jonquilla appartient au genre Narcissus et à la famille des Amaryllidacées. Originaire du Sud-Ouest de l\'Europe (Espagne, Portugal) et du nord-est de l\'Afrique, cette espèce botanique est couramment appelée jonquille ou petite jonquille, mais aussi narcisse jonquille. Il ne faut pas confondre la jonquille Narcissus jonquilla avec le narcisse jaune Narcissus pseudonarcicus (souvent appelé jonquille). Celui-ci est plus grand, avec des fleurs solitaires non odorantes.', 'Septembre', 'Novembre', 'Mars', 'Juin', 4, '-15', '30', '15', '35', '4', '8'),
(5, 'Pétunia', 'https://media.ooreka.fr/public/image/plant/48/mainImage-full-9246513.jpg', 'Le pétunia est originaire d’Amérique du Sud. Cette plante, très répandue dans l’Hexagone, est appréciée pour sa floraison riche et prolongée.\r\nElle possède des rameaux souples, portant des feuilles duveteuses et collantes. Les fleurs, en forme de trompettes très évasées, disposent d’une grande palette de couleurs vives, mais aussi de teintes plus pastel.\r\nLe pétunia est adapté aux balcons, terrasses, rebords de fenêtre ainsi qu’aux massifs en pleine terre.\r\nLe pétunia est une plante vivace cultivée en annuelle. Il est gourmand en eau et en engrais.', 'Février', 'Mai', 'Mai', 'Octobre', 4, '10', '40', '65', '75', '4', '8'),
(9, 'Marguerite', 'https://media.ooreka.fr/public/image/plant/513/mainImage-full-11997787.jpg', 'Le genre Leucanthemum comprend environ 25 espèces, annuelles ou vivaces, originaires des pentes rocheuses et des prairies fraîches d\'Europe ou d\'Asie. C\'est une plante très commune dans tout le pays, où on la rencontre dans les prés, les accotements, les sous-bois clairs. Leucanthemum signifie « fleur blanche » en grec. Il en existe de très nombreux cultivars et hybrides, à fleurs simples, doubles ou semi-doubles.', 'Mars', 'Juin', 'Mai', 'Septembre', 4, '10', '30', '15', '35', '4', '8'),
(10, 'Rhododendron', 'https://media.ooreka.fr/public/image/plant/3/mainImage-full-8660802.jpg', 'Rhododendron signifie « arbre à roses ». On l\'appelait jadis « rosage ». Cet arbuste résistant et fleuri est originaire d\'Asie (sud de la Chine, Himalaya et Japon).', 'Avril', 'Septembre', 'Mars', 'Juillet', 5, '-5', '30', '15', '35', '0', '4'),
(11, 'Romarin', 'https://media.ooreka.fr/public/image/plant/64/mainImage-full-9364294.jpg', 'Ce petit arbrisseau buissonnant possède des feuilles de couleur vert foncé, très aromatiques, pour parfumer les poissons, les grillades, les sauces et les légumes. On l\'utilise particulièrement dans la composition de bouquet garni avec le thym, le laurier sauce, le persil.\r\n       Le romarin est aussi stimulant, digestif, antigoutteux, antirhumatismal, antiseptique et désinfectant.', 'Mars', 'Juin', 'Janvier', 'Décembre', 6, '-15', '30', '0', '15', '6', '8'),
(12, 'Jasmin', 'https://media.ooreka.fr/public/image/plant/10/mainImage-full-9134774.jpg', 'Ce petit arbrisseau buissonnant possède des feuilles de couleur vert foncé, très aromatiques, pour parfumer les poissons, les grillades, les sauces et les légumes. On l\'utilise particulièrement dans la composition de bouquet garni avec le thym, le laurier sauce, le persil. Le romarin est aussi stimulant, digestif, antigoutteux, antirhumatismal, antiseptique et désinfectant.', 'Mars', 'Novembre', 'Janvier', 'Septembre', 7, '-15', '30', '15', '35', '4', '8'),
(13, 'Figuier de Barbarie', 'https://media.ooreka.fr/public/image/plant/216/mainImage-full-11474882.jpg', 'Les Opuntias sont des cactus facilement reconnaissables à leurs tiges articulées plates comme des raquettes, parfois cylindriques, appelées cladodes. Ce genre constitue le groupe le plus important de la famille des Cactacées avec plus de 300 espèces. Les Opuntias occupent des régions tropicales mais aussi de grandes plaines semi-désertiques, des zones montagneuses jusqu’à 5 000 m d’altitude comme sur les hauts plateaux des Andes.', 'Avril', 'Aout', 'Mai', 'Juin', 1, '-6', '40', '5', '15', '6', '12'),
(14, 'Beaucarnea', 'https://media.ooreka.fr/public/image/plant/211/mainImage-full-11517949.jpg', 'Le genre Beaucarnea fait partie de la famille des Ruscacées. C’est une monocotylédone à croissance très lente. En Amérique Centrale, le Beaucarnea recurvata forme dans son milieu d’origine des arbres qui peuvent atteindre 15 m de haut et 14 m de circonférence. Il peut être cultivé en extérieur jusqu’à -5 °C. On peut rencontrer de beaux spécimens cultivés en zone subtropicale mais aussi en France sur la Côte d’Azur et sur l’île de Madère. Il est le plus souvent commercialisé comme plante d’intérieur.', 'Mai', 'Septembre', 'Juillet', 'Aout', 2, '-5', '45', '5', '15', '4', '8'),
(15, 'Portulacaria', 'https://media.ooreka.fr/public/image/plant/198/mainImage-full-11354019.jpg', 'C\'est un arbre buissonnant de 2 à 4 m de haut et très ramifié, originaire d\'Afrique australe, de croissance lente en culture en pot.\r\nSes feuilles charnues obovales à rondes, de forme comparable à celles de Crassula ovata ont une couleur vert jade, mais sont moins épaisses.\r\nElles sont portées par des branches trapues, dont la couleur varie du brun rougeâtre lorsqu\'elles sont jeunes au marron gris lorsqu\'elles sont plus âgées, elles-mêmes insérées sur un tronc de diamètre important à sa base.', 'Janvier', 'Decembre', 'Mai', 'Juin', 2, '5', '20', '5', '15', '6', '9'),
(16, 'Delosperma', 'https://media.ooreka.fr/public/image/plant/564/mainImage-full-11239441.jpg', 'Classé parmi les plantes vivaces, le delosperma est appelé pourpier vivace ou ficoïde vivace. Ses petites feuilles charnues et pointues, resserrées sur des tiges rampantes, se développent en tapis très dense. Considéré à juste titre comme un couvre-sol, il a le grand avantage de produire une floraison lumineuse et spectaculaire pendant plusieurs mois, de juin à la fin septembre. Ses fleurs épanouies en capitules solitaires sont si nombreuses qu’elles finissent par recouvrir le feuillage, ce qui forme des coussins colorés très lumineux que l’on remarque de loin. Leurs couleurs varient du rose au rouge carmin en passant par le violet, il existe aussi une espèce à fleurs jaunes. Les fleurs des espèces courantes ont la particularité de se refermer le soir.', 'Mars', 'Octobre', 'Juin', 'Septembre', 2, '-10', '25', '5', '15', '6', '8'),
(17, 'Capucine', 'https://media.ooreka.fr/public/image/plant/46/mainImage-full-12630171.jpg', 'La capucine est une fleur comestible, très facile d\'entretien, qui fleurit tout l’été. Grimpante ou naine, elle trouve sa place partout au jardin et sur les balcons. Elle est aussi utile au potager car elle éloigne les pucerons des légumes.', 'Mars', 'Juin', 'Mai', 'Oct', 7, '5', '40', '0', '15', '6', '8'),
(18, 'Buddleia', 'https://media.ooreka.fr/public/image/plant/7/mainImage-full-9118157.jpg', 'Appelé plus communément « l\'arbre à papillons », le buddleia offre une floraison abondante aux panicules allant du blanc au rouge en passant par le rose et le violet. Cet arbuste convient parfaitement à la plantation en massif, en isolé ou en haie.', 'Mars', 'Avril', 'Mai', 'Nov', 7, '-5', '30', '15', '35', '4', '8'),
(19, 'Yucca', 'https://media.ooreka.fr/public/image/plant/15/mainImage-full-9140348.jpg', 'Le yucca est une plante du désert qui aime les endroits chauds et secs. Cultivé en extérieur dans les régions chaudes, il développe une floraison impressionnante avec des épis floraux pouvant atteindre deux mètres.', 'Mars', 'Mail', 'Mai', 'Oct', 7, '3', '30', '15', '35', '4', '8'),
(20, 'Sanseveria', 'https://media.ooreka.fr/public/image/plant/405/mainImage-full-11798382.jpg', 'De culture facile la sansevieria est appréciée pour son feuillage vertical. C’est une plante décorative et robuste, qui s’adapte bien et trouve aisément sa place toute l’année dans diverses pièces d’un intérieur. De nouvelles variétés sont à découvrir.', 'Mars', 'Avril', 'Mars', 'Juillet', 1, '10', '50', '0', '15', '4', '8'),
(21, 'Davallia', 'https://media.ooreka.fr/public/image/plant/1867/mainImage-full-12950429.jpg', 'Les Davallia offrent toute l\'année un spectacle original. Ces jolies fougères, de culture peu exigeante, peuvent vivre longtemps. On les appelle souvent patte de lapin ou araignée en référence à leurs rhizomes poilus et rampants rappelant un animal.', 'Avril', 'Mail', '', '', 3, '5', '30', '15', '35', '4', '6'),
(22, 'Puya', 'https://media.ooreka.fr/public/image/plant/1851/mainImage-full-12944037.jpg', 'Les Puya sont des Broméliacées terrestres épiphytes originales à floraison spectaculaire et magnifique. Leurs feuilles munies de fortes épines acérées en font des plantes à isoler ou à placer avec vos yuccas, dasylirions, agaves.', 'Mai', 'Juillet', 'Juin', 'Aout ', 7, '-5', '30', '0', '15', '6', '8'),
(23, 'Anis vert', 'https://media.ooreka.fr/public/image/plant/316/mainImage-full-10190212.jpg', 'Graines incontournables pour le pain d’épices et délicatement anisées pour des tisanes stimulantes, essence forte pour l’anisette ou l’ouzo (avec modération) et feuilles agréablement parfumées dans les crudités : l’anis vert a tout pour plaire !', 'Mars', 'Mai', 'Juillet', 'Aout ', 4, '0', '30', '0', '15', '6', '8'),
(24, 'Narcisse', 'https://media.ooreka.fr/public/image/plant/43/mainImage-full-9228723.jpg', 'Le narcisse offre un véritable spectacle dans les jardins ou en jardinière quand ils sont plantés en massif ou en groupe. C\'est une très belle fleur le plus souvent de couleur jaune mais parfois blanche et à l\'entretien facile.', 'Sept', 'Nov', 'Fevr', 'Mai ', 7, '-5', '30', '15', '35', '4', '8'),
(25, 'Souci', 'https://media.ooreka.fr/public/image/plant/33/mainImage-full-9218523.jpg', 'Le souci est facile à cultiver et s\'adapte à tous les sols. En massif, en bordure ou encore en rocaille, cette plante annuelle donne de l\'éclat au jardin grâce à sa floraison abondante et prolongée de couleur jaune ou orangée.', 'Mars', 'Juin', 'Avril', 'Oct ', 7, '0', '30', '15', '35', '4', '8'),
(26, 'Dracéna', 'https://media.ooreka.fr/public/image/plant/17/mainImage-full-9227362.jpg', 'Réputé pour son beau feuillage lancéolé et arqué, souvent panaché, le dracéna est un arbuste érigé. Il est aussi fréquemment utilisé comme une plante d\'intérieur, esthétique, résistante et très facile à cultiver.', 'Mars', 'Mai', 'Mars', 'Mai', 4, '8', '30', '0', '15', '4', '8'),
(27, 'Renoncule', 'https://media.ooreka.fr/public/image/plant/28/mainImage-full-9205141.jpg', 'La renoncule des jardins (Ranunculus asiaticus) est une ravissante plante aux couleurs vives et variées, facile à cultiver. Elle égaie parfaitement jardins, terrasses et balcons et permet la réalisation de superbes bouquets.', 'Février', 'Avril', 'Mai', 'Juillet', 7, '0', '26', '15', '35', '2', '6'),
(28, 'Yuzu', 'https://media.ooreka.fr/public/image/plant/1621/mainImage-full-12819421.jpg', 'Le yuzu est un agrume en vogue, utilisé dans la cuisine asiatique pour son zeste et son jus très parfumés. Cet arbre très épineux, de taille moyenne se cultive en intérieur ou sous climat doux, pour ses fruits ou pour sa floraison.', 'Mars', 'Avril', 'Mars', 'Mai', 7, '-2', '27', '15', '35', '4', '8'),
(29, 'Heliamphora', 'https://media.ooreka.fr/public/image/plant/2055/mainImage-full-13499665.jpg', 'Plante carnivore de belle allure, l\'héliamphora a beaucoup de succès auprès des amateurs. Avec une forme d\'urne dressée, cette plante d\'extérieur, de serre ou d\'intérieur se cultive dans un milieu humide.', 'Mars', 'Avril', 'Mars', 'Novembre', 5, '5', '29', '65', '75', '4', '8'),
(30, 'Palmier de Noël', 'https://media.ooreka.fr/public/image/plant/1365/mainImage-full-12552481.jpg', 'Aussi appelé palmier de Noël pour ses grosses grappes de graines rouge vif en période de fêtes de fin d\'année, l\'Adonidia merrillii est un palmier monocaule des plus décoratif. Ses palmes très récurvées lui donnent une noblesse incomparable.', 'Mars', 'Mai', 'Juillet', 'Septembre', 2, '5', '28', '15', '35', '4', '8'),
(31, 'Dasylirion', 'https://media.ooreka.fr/public/image/plant/661/mainImage-full-12124927.jpg', 'Le dasylirion est une plante grasse très utilisée dans les jardins secs et méditerranéens ainsi que sur les terrasses contemporaines car il se suffit de peu. Décoratif toute l’année, il donne un côté exotique aux compositions.', 'Mars', 'Juin', 'Août', 'Septembre', 2, '2', '29', '15', '35', '6', '8'),
(32, 'Malvastrum', 'https://media.ooreka.fr/public/image/plant/790/mainImage-full-12130655.jpg', 'De la même famille, le malvastrum est moins employé que les mauves à grandes fleurs mais il offre également une jolie floraison et surtout une grande résistance en tous terrains.', 'Mars', 'Mai', 'Juin', 'Juillet', 7, '-3', '29', '0', '15', '4', '8'),
(33, 'Jovellana', 'https://media.ooreka.fr/public/image/plant/1553/mainImage-full-12789335.jpg', 'Jovellana violacea est un arbrisseau à floraison estivale au feuillage semi-persistant.Plante à cultiver comme annuelle dans les régions très froides, vivace ailleurs. Ses belles fleurs mauves ont une gorge jaune veloutée du plus bel effet.', 'Mars', 'Avril', 'Juin', 'Août', 7, '3', '30', '15', '35', '4', '8'),
(34, 'Eléagnus', 'https://media.ooreka.fr/public/image/plant/445/mainImage-full-11907483.jpg', 'Arbre ou arbuste de haie, à feuillage persistant brillant, l’éléagnus est particulièrement résistant à la sécheresse et aux embruns. Il est également très rustique et peu exigeant à la plantation, comme en entretien.', 'Mars', 'Septembre', 'Mai', 'Juillet', 7, '-5', '27', '0', '15', '0', '8'),
(35, 'Sanguisorbe', 'https://media.ooreka.fr/public/image/plant/1995/mainImage-full-13202335.jpg', 'Les sanguisorbes, vivaces très rustiques, devraient faire partie de tous les jardins. Si la petite pimprenelle – sauvageonne de nos régions – en est la représentante la plus célèbre, les autres espèces, fines et élégantes, sont à adopter sans tarder !', 'Mars', 'Mai', 'Juin', 'Octobre', 7, '-5', '28', '65', '75', '4', '8'),
(36, 'Cactus de pâques', 'https://media.ooreka.fr/public/image/plant/996/mainImage-full-12330614.jpg', 'Le cactus de Pâques est une cactacée épiphyte brésilienne, à tiges plates ou anguleuses non épineuses, en général retombantes. Il produit en extrémité de tiges des fleurs rose mauve au printemps d\'où son nom vernaculaire par opposition aux cactus de Noël.', 'Janvier', 'Dec', 'Avril', 'Juillet', 1, '5', '29', '15', '35', '2', '4'),
(38, 'eaazaz', NULL, 'aeeza', 'aze', 'zea', 'zea', 'zae', 3, '12', '51', '144', '15', '15', '14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'root', 'root');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartenances`
--
ALTER TABLE `appartenances`
  ADD PRIMARY KEY (`serial_key`),
  ADD KEY `FK_appartenances_id_user` (`id_user`),
  ADD KEY `FK_appartenances_id_plante` (`id_plante`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `FK_data_serial_key` (`serial_key`);

--
-- Index pour la table `plantes`
--
ALTER TABLE `plantes`
  ADD PRIMARY KEY (`id_plante`),
  ADD KEY `FK_plantes_id_categorie` (`id_categorie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `plantes`
--
ALTER TABLE `plantes`
  MODIFY `id_plante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenances`
--
ALTER TABLE `appartenances`
  ADD CONSTRAINT `FK_appartenances_id_plante` FOREIGN KEY (`id_plante`) REFERENCES `plantes` (`id_plante`),
  ADD CONSTRAINT `FK_appartenances_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `FK_data_serial_key` FOREIGN KEY (`serial_key`) REFERENCES `appartenances` (`serial_key`);

--
-- Contraintes pour la table `plantes`
--
ALTER TABLE `plantes`
  ADD CONSTRAINT `FK_plantes_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
