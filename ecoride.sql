CREATE SCHEMA IF NOT EXISTS `ecoride` DEFAULT CHARACTER SET utf8mb4 ;
USE `ecoride` ;

-- Table avis
CREATE TABLE IF NOT EXISTS `ecoride`.`avis` (
  `avis_id` INT(11) NOT NULL,
  `commentaire` VARCHAR(50) NOT NULL,
  `note` VARCHAR(50) NOT NULL,
  `statut` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`avis_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table configuration
CREATE TABLE IF NOT EXISTS `ecoride`.`configuration` (
  `id_configuration` INT(11) NOT NULL,
  PRIMARY KEY (`id_configuration`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`covoiturage`
CREATE TABLE IF NOT EXISTS `ecoride`.`covoiturage` (
  `covoiturage_id` INT(11) NOT NULL,
  `date_depart` DATE NOT NULL,
  `heure_depart` VARCHAR(50) NOT NULL,
  `lieu_depart` VARCHAR(50) NOT NULL,
  `date_arrivee` DATE NOT NULL,
  `heure_arrivee` VARCHAR(50) NOT NULL,
  `lieu_arrivee` VARCHAR(50) NOT NULL,
  `statut` VARCHAR(50) NOT NULL,
  `nb_place` INT(50) NOT NULL,
  `prix_personne` FLOAT NOT NULL,
  PRIMARY KEY (`covoiturage_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`marque`
CREATE TABLE IF NOT EXISTS `ecoride`.`marque` (
  `marque_id` INT(11) NOT NULL,
  `libelle` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`marque_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`parametre`
CREATE TABLE IF NOT EXISTS `ecoride`.`parametre` (
  `parametre_id` INT(11) NOT NULL,
  `propriete` VARCHAR(50) NOT NULL,
  `valeur` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`parametre_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`role`
CREATE TABLE IF NOT EXISTS `ecoride`.`role` (
  `role_id` INT(11) NOT NULL,
  `libelle` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`utilisateur`
CREATE TABLE IF NOT EXISTS `ecoride`.`utilisateur` (
  `utilisateur_id` INT(11) NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `telephone` VARCHAR(50) NOT NULL,
  `adresse` VARCHAR(50) NOT NULL,
  `date_naissance` VARCHAR(50) NOT NULL,
  `photo` BLOB NOT NULL,
  `pseudo` VARCHAR(50) NOT NULL,
  `voiture_voiture_id` INT(11) NOT NULL,
  PRIMARY KEY (`utilisateur_id`, `voiture_voiture_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- Table `ecoride`.`voiture`
CREATE TABLE IF NOT EXISTS `ecoride`.`voiture` (
  `voiture_id` INT(11) NOT NULL,
  `modele` VARCHAR(50) NOT NULL,
  `immatriculation` VARCHAR(50) NOT NULL,
  `energie` VARCHAR(50) NOT NULL,
  `couleur` VARCHAR(50) NOT NULL,
  `date_premiere_immatriculation` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`voiture_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;