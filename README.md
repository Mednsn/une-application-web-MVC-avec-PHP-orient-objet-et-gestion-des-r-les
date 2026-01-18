📌 Projet MVC PHP – Authentification et gestion des rôles
🧩 Contexte du projet

Dans un contexte professionnel, un développeur backend doit être capable de concevoir une application web maintenable, sécurisée et évolutive.
Ce projet consiste à mettre en place une application PHP basée sur l’architecture MVC (Model – View – Controller) afin de séparer les responsabilités, améliorer la lisibilité du code et faciliter sa maintenance.

L’architecture développée a vocation à servir de base réutilisable pour de futurs projets web.

🎯 Objectifs pédagogiques

Ce projet permet de :

Comprendre le rôle de chaque couche de l’architecture MVC

Mettre en place une architecture claire et organisée

Appliquer les principes fondamentaux de la Programmation Orientée Objet (POO) en PHP

Gérer l’authentification des utilisateurs

Mettre en place un système d’autorisations basé sur les rôles (User / Admin)

⚙️ Fonctionnalités de l’application
✅ Fonctionnalités obligatoires

Architecture MVC simple et fonctionnelle

Point d’entrée unique (index.php)

Système de routage (URL → contrôleur → méthode)

Connexion à la base de données via PDO

Authentification utilisateur (login / logout)

Gestion des rôles :

User : accès au Front Office

Admin : accès au Back Office

Séparation Front Office / Back Office

CRUD simple (utilisateurs, articles ou produits)

Protection des routes selon le rôle utilisateur

Gestion des erreurs et messages utilisateur

Respect des principes de la POO

Architecture MVC entièrement développée from scratch

Routage avancé avec paramètres dynamiques

Classe Validator pour la validation des formulaires

Classe Session dédiée à la gestion des sessions

Sécurisation CSRF basique

Utilisation d’un moteur de templates (Twig ou équivalent)

🗂️ Structure du projet
/projet-mvc

│

│──public/

│   ├──index.php        #Point d’entrée

│   ├── .htaccess        # Réécriture des URLs

│   └── assets/          # CSS / JS / Images

│

│── app/

│   ├── controllers/

│   │   ├── FrontController.php

│   │   ├── AuthController.php

│   │   └── AdminController.php

│   │

│   ├── models/

│   │   ├──User.php

│   │   └── BaseModel.php

│   │

│   ├── views/

│   │   ├── front/

│   │   ├── back/

│   │   └── auth/

│   │

│   ├── core/

│   │   ├── Router.php

│   │   ├── Controller.php

│   │   ├──Database.php

│   │   ├── Auth.php

│   │   └──Session.php

│   │

│   └── config/

│       ├── config.php

│       └── routes.php

│

│── .env

│── README.md

│── .gitignore



🧠 Architecture MVC

Model : gère les données et l’accès à la base de données

View : responsable uniquement de l’affichage

Controller : traite les requêtes, appelle les modèles et retourne les vues

📌 Règles respectées :

Le contrôleur ne contient pas de HTML

Le modèle ne contient pas de logique d’affichage

La vue ne contient pas de logique métier

🔐 Sécurité

Utilisation de requêtes préparées avec PDO

Vérification des sessions utilisateur

Protection des routes selon le rôle

Nettoyage des données utilisateur

Redirection automatique vers la page de connexion si l’utilisateur n’est pas authentifié

##🧪 Bonnes pratiques

Code organisé et lisible

Responsabilités clairement séparées

Classes bien nommées

Propriétés privées ou protégées

Utilisation de constructeurs

Méthodes courtes et compréhensibles

