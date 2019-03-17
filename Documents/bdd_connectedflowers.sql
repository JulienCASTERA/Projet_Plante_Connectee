/* Création de la base de données */
DROP TABLE IF EXISTS plantes ;
CREATE TABLE plantes (id_plante INT  AUTO_INCREMENT NOT NULL,
nom_plante VARCHAR(45),
description VARCHAR(45),
id_plantation INT,
id_floraison INT,
id_categorie INT,
id_temperature INT,
PRIMARY KEY (id_plante) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS plantation ;
CREATE TABLE plantation (id_plantation INT  AUTO_INCREMENT NOT NULL,
debut_plantation VARCHAR(45),
fin_plantation VARCHAR(45),
PRIMARY KEY (id_plantation) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS floraison ;
CREATE TABLE floraison (id_floraison INT  AUTO_INCREMENT NOT NULL,
debut_floraison VARCHAR(45),
fin_floraison VARCHAR(45),
PRIMARY KEY (id_floraison) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS categorie ;
CREATE TABLE categorie (id_categorie INT  AUTO_INCREMENT NOT NULL,
nom_categorie VARCHAR(45),
id_humidite INT,
PRIMARY KEY (id_categorie) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS humidite ;
CREATE TABLE humidite (id_humidite INT  AUTO_INCREMENT NOT NULL,
pourcentage_debut INT,
pourcentage_fin INT,
PRIMARY KEY (id_humidite) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS user ;
CREATE TABLE user (id_user INT  AUTO_INCREMENT NOT NULL,
username VARCHAR(45),
password VARCHAR(45),
PRIMARY KEY (id_user) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS appartenances ;
CREATE TABLE appartenances (id_appartenance INT  AUTO_INCREMENT NOT NULL,
serial_key VARCHAR(45),
id_user INT NOT NULL,
id_plante INT NOT NULL,
PRIMARY KEY (id_appartenance) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS temperature ; 
CREATE TABLE temperature (id_temperature INT  AUTO_INCREMENT NOT NULL,
temp_min INT,
temp_max INT,
PRIMARY KEY (id_temperature) ) ENGINE=InnoDB;


/* Ajout des clés étrangères */
ALTER TABLE plantes ADD CONSTRAINT FK_plantes_id_plantation FOREIGN KEY (id_plantation) REFERENCES plantation (id_plantation);
ALTER TABLE plantes ADD CONSTRAINT FK_plantes_id_floraison FOREIGN KEY (id_floraison) REFERENCES floraison (id_floraison);
ALTER TABLE plantes ADD CONSTRAINT FK_plantes_id_categorie FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie);
ALTER TABLE plantes ADD CONSTRAINT FK_plantes_id_temperature FOREIGN KEY (id_temperature) REFERENCES temperature (id_temperature);
ALTER TABLE categorie ADD CONSTRAINT FK_categorie_id_humidite FOREIGN KEY (id_humidite) REFERENCES humidite (id_humidite);
ALTER TABLE appartenances ADD CONSTRAINT FK_appartenances_id_user FOREIGN KEY (id_user) REFERENCES user (id_user);
ALTER TABLE appartenances ADD CONSTRAINT FK_appartenances_id_plante FOREIGN KEY (id_plante) REFERENCES plantes (id_plante);

/* Valeurs dans la table plantation */
INSERT INTO plantation (debut_plantation, fin_plantation)
VALUES ("Janvier", "Décembre"),
("Janvier", "Mars"),
("Janvier", "Mai"),
("Fevrier", "Avril"),
("Fevrier", "Mai"),
("Mars", "Mai"),
("Septembre", "Décembre"),
("Octobre", "Décembre");

/* Valeurs dans la table humidite */
INSERT INTO humidite (pourcentage_debut, pourcentage_fin)
VALUES (30,50),
(30,50),
(50,75),
(50,60);

/* Valeurs dans la table floraison */
INSERT INTO floraison (debut_floraison, fin_floraison)
VALUES ("Janvier" , "Avril"),
("Janvier" , "Décembre"),
("Mars" , "Mai"),
("Mars" , "Avril"),
("Avril" , "Mai"),
("Avril" , "Juillet"),
("Avril" , "Octobre"),
("Avril" , "Novembre"),
("Mai" , "Mai"),
("Mai" , "Juin"),
("Mai" , "Octobre"),
("Mai" , "Novembre"),
("Juin" , "Septembre"),
("Juin" , "Octobre"),
("Juin" , "Novembre"),
("Juillet" , "Aout"),
("Juillet" , "Septembre"),
("Novembre" , "Décembre"),
("Décembre" , "Mars");

/* Valeurs dans la table temperature */
INSERT INTO temperature(temp_min, temp_max)
VALUES (15,25),
(30,50);