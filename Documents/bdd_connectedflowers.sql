--
-- Base de données :  `connectedflowers`
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
-- Contenu de la table `appartenances`
--

INSERT INTO `appartenances` (`serial_key`, `id_user`, `id_plante`) VALUES
('002', 2, 1),
('003', 2, 2),
('004', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(45) DEFAULT NULL,
  `id_humidite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `id_humidite`) VALUES
(1, 'Cactus', 1),
(2, 'Plantes grasses', 1),
(3, 'Fougères', 2),
(4, 'Plantes vertes', 2),
(5, 'Plantes d\'origine tropicale', 3);

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `data_hum` int(11) NOT NULL,
  `data_lum` int(11) NOT NULL,
  `data_temp` int(11) NOT NULL,
  `serial_key` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `floraison`
--

CREATE TABLE `floraison` (
  `id_floraison` int(11) NOT NULL,
  `debut_floraison` varchar(45) DEFAULT NULL,
  `fin_floraison` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `floraison`
--

INSERT INTO `floraison` (`id_floraison`, `debut_floraison`, `fin_floraison`) VALUES
(1, 'Janvier', 'Avril'),
(2, 'Janvier', 'Décembre'),
(3, 'Mars', 'Mai'),
(4, 'Mars', 'Avril'),
(5, 'Avril', 'Mai'),
(6, 'Avril', 'Juillet'),
(7, 'Avril', 'Octobre'),
(8, 'Avril', 'Novembre'),
(9, 'Mai', 'Mai'),
(10, 'Mai', 'Juin'),
(11, 'Mai', 'Octobre'),
(12, 'Mai', 'Novembre'),
(13, 'Juin', 'Septembre'),
(14, 'Juin', 'Octobre'),
(15, 'Juin', 'Novembre'),
(16, 'Juillet', 'Aout'),
(17, 'Juillet', 'Septembre'),
(18, 'Novembre', 'Décembre'),
(19, 'Décembre', 'Mars');

-- --------------------------------------------------------

--
-- Structure de la table `humidite`
--

CREATE TABLE `humidite` (
  `id_humidite` int(11) NOT NULL,
  `pourcentage_debut` int(11) DEFAULT NULL,
  `pourcentage_fin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `humidite`
--

INSERT INTO `humidite` (`id_humidite`, `pourcentage_debut`, `pourcentage_fin`) VALUES
(1, 10, 25),
(2, 30, 50),
(3, 50, 75),
(4, 50, 60);

-- --------------------------------------------------------

--
-- Structure de la table `luminosite`
--

CREATE TABLE `luminosite` (
  `id_luminosite` int(11) NOT NULL,
  `lumi_min` int(11) NOT NULL,
  `lumi_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plantation`
--

CREATE TABLE `plantation` (
  `id_plantation` int(11) NOT NULL,
  `debut_plantation` varchar(45) DEFAULT NULL,
  `fin_plantation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plantation`
--

INSERT INTO `plantation` (`id_plantation`, `debut_plantation`, `fin_plantation`) VALUES
(1, 'Janvier', 'Décembre'),
(2, 'Janvier', 'Mars'),
(3, 'Janvier', 'Mai'),
(4, 'Fevrier', 'Avril'),
(5, 'Fevrier', 'Mai'),
(6, 'Mars', 'Mai'),
(7, 'Septembre', 'Décembre'),
(8, 'Octobre', 'Décembre');

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

CREATE TABLE `plantes` (
  `id_plante` int(11) NOT NULL,
  `nom_plante` varchar(45) DEFAULT NULL,
  `image_name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `id_plantation` int(11) DEFAULT NULL,
  `id_floraison` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `id_temperature` int(11) DEFAULT NULL,
  `id_luminosite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plantes`
--

INSERT INTO `plantes` (`id_plante`, `nom_plante`, `image_name`, `description`, `id_plantation`, `id_floraison`, `id_categorie`, `id_temperature`, `id_luminosite`) VALUES
(1, 'Jonquille', 'jonquille.svg', 'Description joncquille', 1, 2, 3, 1, 0),
(2, 'Rose', 'rose.jpg', 'Cette fois c\'est les roses', 2, 4, 1, 1, 0),
(3, 'aezeaz', NULL, 'zea', 2, 16, 4, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `temperature`
--

CREATE TABLE `temperature` (
  `id_temperature` int(11) NOT NULL,
  `temp_min` int(11) DEFAULT NULL,
  `temp_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `temperature`
--

INSERT INTO `temperature` (`id_temperature`, `temp_min`, `temp_max`) VALUES
(1, 15, 25),
(2, 30, 50);

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
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'root', 'root');

--
-- Index pour les tables exportées
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
  ADD PRIMARY KEY (`id_categorie`),
  ADD KEY `FK_categorie_id_humidite` (`id_humidite`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `FK_data_serial_key` (`serial_key`);

--
-- Index pour la table `floraison`
--
ALTER TABLE `floraison`
  ADD PRIMARY KEY (`id_floraison`);

--
-- Index pour la table `humidite`
--
ALTER TABLE `humidite`
  ADD PRIMARY KEY (`id_humidite`);

--
-- Index pour la table `luminosite`
--
ALTER TABLE `luminosite`
  ADD PRIMARY KEY (`id_luminosite`);

--
-- Index pour la table `plantation`
--
ALTER TABLE `plantation`
  ADD PRIMARY KEY (`id_plantation`);

--
-- Index pour la table `plantes`
--
ALTER TABLE `plantes`
  ADD PRIMARY KEY (`id_plante`),
  ADD KEY `id_luminosite` (`id_luminosite`),
  ADD KEY `FK_plantes_id_plantation` (`id_plantation`),
  ADD KEY `FK_plantes_id_floraison` (`id_floraison`),
  ADD KEY `FK_plantes_id_categorie` (`id_categorie`),
  ADD KEY `FK_plantes_id_temperature` (`id_temperature`);

--
-- Index pour la table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id_temperature`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `floraison`
--
ALTER TABLE `floraison`
  MODIFY `id_floraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `humidite`
--
ALTER TABLE `humidite`
  MODIFY `id_humidite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `luminosite`
--
ALTER TABLE `luminosite`
  MODIFY `id_luminosite` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `plantation`
--
ALTER TABLE `plantation`
  MODIFY `id_plantation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `plantes`
--
ALTER TABLE `plantes`
  MODIFY `id_plante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id_temperature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenances`
--
ALTER TABLE `appartenances`
  ADD CONSTRAINT `FK_appartenances_id_plante` FOREIGN KEY (`id_plante`) REFERENCES `plantes` (`id_plante`),
  ADD CONSTRAINT `FK_appartenances_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_categorie_id_humidite` FOREIGN KEY (`id_humidite`) REFERENCES `humidite` (`id_humidite`);

--
-- Contraintes pour la table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `FK_data_serial_key` FOREIGN KEY (`serial_key`) REFERENCES `appartenances` (`serial_key`);

--
-- Contraintes pour la table `plantes`
--
ALTER TABLE `plantes`
  ADD CONSTRAINT `FK_plantes_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `FK_plantes_id_floraison` FOREIGN KEY (`id_floraison`) REFERENCES `floraison` (`id_floraison`),
  ADD CONSTRAINT `FK_plantes_id_plantation` FOREIGN KEY (`id_plantation`) REFERENCES `plantation` (`id_plantation`),
  ADD CONSTRAINT `FK_plantes_id_temperature` FOREIGN KEY (`id_temperature`) REFERENCES `temperature` (`id_temperature`);
