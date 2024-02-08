# Projet de Plateforme Web pour Communication et Marketing

Ce projet vise à développer une plateforme web interne pour notre client, une entreprise en pleine croissance dans le secteur de la communication et du marketing. La plateforme intégrera des fonctionnalités avancées pour centraliser et rationaliser les opérations en ligne, améliorant ainsi la communication, la gestion de l'information et la collaboration au sein de l'équipe.

## Fonctionnalités Principales

### Gestion de Newsletter (Spatie)
La plateforme permettra à l'entreprise d'envoyer des newsletters régulières à ses clients et partenaires. L'intégration du package Spatie Newsletter facilitera la création, l'envoi et le suivi des campagnes de newsletters, avec des fonctionnalités intuitives de gestion des abonnements et des listes de diffusion.

### Authentification avec Gestion des Rôles (Policies et Guards)
La sécurité et la confidentialité des données seront assurées par un système d'authentification robuste, avec une gestion des rôles basée sur les politiques et les gardes de Laravel. Trois rôles distincts seront définis : Administrateur, Rédacteur et Membre, avec des autorisations spécifiques pour chaque partie de la plateforme.

### Fonctionnalités Forgot Password et Remember Me
Pour une expérience utilisateur fluide, la plateforme inclura les fonctionnalités "forgot password" pour la réinitialisation des mots de passe et "remember me" pour la connexion automatique.

### Media Library (Spatie)
La gestion de médias sera simplifiée grâce à l'utilisation de Spatie Media Library. Les utilisateurs pourront télécharger, organiser et partager des fichiers multimédias tels que des images, des vidéos et des documents, chaque média étant associé à un utilisateur ou à un projet spécifique.

### Soft Delete
Pour éviter la perte accidentelle de données, la plateforme mettra en œuvre la fonctionnalité "soft delete", marquant les enregistrements comme supprimés plutôt que de les supprimer physiquement de la base de données, permettant ainsi de les restaurer si nécessaire.

### Middleware
Des middleware seront mis en place pour gérer les autorisations spécifiques aux rôles, garantissant que chaque utilisateur a accès uniquement aux fonctionnalités qui lui sont autorisées en fonction de son rôle.

### Génération PDF
La plateforme pourra générer des fichiers PDF à partir de données spécifiques, comme des rapports mensuels sur les performances des campagnes de newsletters ou des récapitulatifs des médias téléchargés sur une période donnée.

### Modélisation avec 3 Rôles
La base de données sera modélisée pour prendre en charge les trois rôles définis (Administrateur, Rédacteur, Membre), avec des tables et des relations spécifiques assurant une séparation claire des données et des responsabilités au sein de la plateforme.

## Comment Démarrer le Projet

1. **Prérequis :**
    - Assurez-vous d'avoir PHP (version X.X.X ou supérieure) installé sur votre système.
    - Installez Composer (https://getcomposer.org/) pour gérer les dépendances PHP.

2. **Cloner le Projet :**
   ```bash
   git clone https://github.com/Youcode-Classe-E-2023-2024/Med-El-Bachiri_Newsletter.git
   ```

3. **Installation des Dépendances :**
    - Accédez au répertoire du projet cloné.
    - Exécutez la commande suivante pour installer les dépendances Laravel :
      ```bash
      composer install
      ```

4. **Configuration de l'Environnement :**
    - Dupliquez le fichier `.env.example` et renommez le fichier copié en `.env`.
    - Configurez les détails de la base de données dans le fichier `.env`.

5. **Génération de la Clé d'Application :**
    - Exécutez la commande suivante pour générer une clé d'application unique :
      ```bash
      php artisan key:generate
      ```

6. **Migrations de la Base de Données :**
    - Exécutez les migrations pour créer les tables de la base de données :
      ```bash
      php artisan migrate
      ```

7. **Lancement du Serveur de Développement :**
    - Démarrez le serveur de développement en exécutant la commande :
      ```bash
      php artisan serve
      ```
    - Accédez à l'URL indiquée dans votre navigateur pour accéder à la plateforme.

---
Enjoy !!!
