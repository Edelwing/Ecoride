# 🌱 EcoRide – Plateforme fictive de covoiturage écologique

Ce projet a été développé dans le cadre d’un examen de formation.  
Il simule une plateforme de covoiturage éco-responsable avec une interface en HTML/CSS/JavaScript et un backend en PHP + MySQL.

---

## 📁 Contenu du projet

- accueil.php : Page d'accueil avec carrousel et formulaire de recherche
- covoiturages.php : Affichage des trajets simulés (avec filtres)
- connexion.php : Formulaire de connexion (en lien avec la base de données)
- inscription.php : Création d’un compte utilisateur
- contact.php : Formulaire de contact
- mentions_legales : Mentions légales du site
- style.css : Feuille de style principale
- README.md : Instructions d'installation

---

## 🧰 Technologies utilisées

- **Frontend :** HTML5, CSS3, Bootstrap 5, JavaScript
- **Backend :** PHP
- **Base de données :** MySQL

---

## 🚀 Déploiement local

### 1. Prérequis

- [XAMPP](https://www.apachefriends.org/fr/index.html) ou [MAMP](https://www.mamp.info/fr/) (Apache + MySQL + PHP)
- Un navigateur moderne (Chrome, Firefox…)

### 2. Installation

1. Cloner le projet ou extraire l’archive :
   ```bash
   git clone https://github.com/Edelwing/ecoride.git
   ```

2. Copier le projet dans le dossier htdocs de XAMPP ou Sites de MAMP.

3. Lancer **Apache** et **MySQL** depuis le panneau de contrôle.

4. Créer la base de données MySQL :
   - Ouvrir phpMyAdmin
   - Créer une base de données nommée ecoride
   - Importer le fichier ecoride.sql

5. Modifier le fichier de connexion (ex. : /database/db_connect.php) avec vos identifiants :
   ```
   $servername = "localhost";
   $username = "admin";
   $password = "admin";
   $dbname = "ecoride";
   ```
7. Accéder au site :
   ```
   http://localhost/accueil.php
   ```

---

## ⚙️ Fonctionnalités

- Rechercher des trajets (avec filtres dynamiques)
- S’inscrire et se connecter à un compte
- Afficher des trajets depuis la base de données
- Simuler un système de contact utilisateur

---

## 🔐 Sécurité & limites

- Les données utilisateurs sont stockées en base (avec mots de passe hashés de préférence)
- Aucun traitement réel de paiement n’est effectué
- Ce projet ne doit pas être utilisé en production sans sécurisation complète

---

## ⚖️ Mentions légales

Ce projet est fictif, conçu uniquement pour un usage pédagogique.  
Voir : [`mentions_legales.php`](mentions_legales.php)

---

## 👨‍💻 Auteur

Projet réalisé par Mr Garcia Esteban dans le cadre d’un examen de formation.
