-- table avis
CREATE TABLE avis (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(50) NOT NULL,
  `note` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  PRIMARY KEY (avis_id)
);

-- table configuration
CREATE TABLE configuration (
  `id_configuration` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_configuration)
);

-- table covoiturage
CREATE TABLE covoiturage (
  `covoiturage_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `heure_depart` varchar(50) NOT NULL,
  `lieu_depart` varchar(50) NOT NULL,
  `date_arrivee` date NOT NULL,
  `heure_arrivee` varchar(50) NOT NULL,
  `lieu_arrivee` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `nb_place` int(50) NOT NULL,
  `prix_personne` float NOT NULL,
  PRIMARY KEY (covoiturage_id)
);

-- table marque
CREATE TABLE marque (
  `marque_id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (marque_id)
);

-- table parametre
CREATE TABLE parametre (
  `parametre_id` int(11) NOT NULL AUTO_INCREMENT,
  `propriete` varchar(50) NOT NULL,
  `valeur` varchar(50) NOT NULL,
  PRIMARY KEY (parametre_id)
);

--  table role
CREATE TABLE role (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (role_id)
);

-- table utilisateur
CREATE TABLE utilisateur (
  `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50),
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` varchar(50),
  `adresse` varchar(50),
  `date_naissance` varchar(50),
  `photo` blob,
  `pseudo` varchar(50),
  PRIMARY KEY (utilisateur_id)
);

-- table voiture
CREATE TABLE voiture (
  `voiture_id` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) NOT NULL,
  `immatriculation` varchar(50) NOT NULL,
  `energie` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `date_premiere_immatriculation` varchar(50) NOT NULL,
  PRIMARY KEY (voiture_id)
);
COMMIT;