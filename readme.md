# Mon site WordPress - README

## Description

Ce projet est un site WordPress développé avec mon propre thème personnalisé. Le thème inclut un système de connexion personnalisé pour les utilisateurs.

## Fonctionnalités

- **Thème personnalisé** : Le site utilise un thème WordPress personnalisé que j'ai développé. Le thème est situé dans le répertoire `wp-content/themes/gavinn`.
- **Système de connexion personnalisé** : J'ai développé un système de connexion personnalisé pour les utilisateurs du site. Il utilise des fonctionnalités WordPress telles que les utilisateurs et les rôles.
- **Pages principales** :
  - Page d'accueil : La page d'accueil du site avec une présentation de l'entreprise et des services offerts.
  - Blog : Une section blog pour publier des articles et des actualités.
  - Contact : Une page de contact avec un formulaire pour permettre aux visiteurs de nous contacter.

## Installation

1. Cloner le dépôt GitHub :

   ```bash
   git clone https://github.com/AperanoGavin/Wordpress
   ```

2. Copier le répertoire du thème dans le répertoire `wp-content/themes` de votre installation WordPress.

3. Activer le thème personnalisé dans l'administration de WordPress.

4. Assurez-vous d'avoir une base de données MySQL configurée et créez un fichier `wp-config.php` à la racine de votre installation WordPress avec les informations de connexion appropriées.

5. Importer le fichier SQL `backup.sql` dans votre base de données pour ajouter les tables et les données nécessaires pour le système de connexion personnalisé.

6. Accédez à votre site WordPress et explorez les différentes pages et fonctionnalités.

## Configuration du système de connexion

Le système de connexion personnalisé utilise les fonctionnalités de gestion des utilisateurs et des rôles de WordPress. Voici les étapes pour le configurer :

1. Connectez-vous en tant qu'administrateur sur votre site WordPress.

2. Accédez à la section "Utilisateurs" dans l'administration.

3. Créez de nouveaux utilisateurs et attribuez-leur des rôles en fonction de leurs autorisations. Par exemple, vous pouvez créer des utilisateurs avec les rôles "Abonné", "Auteur" ou "Éditeur".

4. Utilisez les fonctions et les modèles du thème personnalisé pour afficher les fonctionnalités de connexion et les informations utilisateur.

N'hésitez pas à personnaliser le thème et à ajouter vos propres fonctionnalités selon vos besoins spécifiques. Profitez de votre nouveau site WordPress avec le thème personnalisé !