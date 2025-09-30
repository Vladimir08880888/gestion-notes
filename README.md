# Gestion de Notes

Application web simple de gestion de notes scolaires développée en PHP procédural avec PDO et SQLite.

## 📋 Présentation

Cette application permet de gérer des notes avec les fonctionnalités suivantes :
- Ajouter une nouvelle note (titre + contenu)
- Afficher la liste de toutes les notes
- Supprimer une note
- Interface simple et intuitive

## 🛠️ Pré-requis

- PHP 7.0 ou supérieur
- Extension SQLite3 pour PHP
- Extension PDO pour PHP

## 📦 Installation

1. Cloner ou télécharger le projet dans votre dossier local
2. Ouvrir un terminal dans le dossier du projet
3. Créer la base de données SQLite en exécutant :
   ```bash
   sqlite3 database.sqlite < database.sql
   ```

## 🚀 Lancement

Démarrer le serveur PHP intégré :
```bash
php -S localhost:8000
```

Puis ouvrir votre navigateur à l'adresse : http://localhost:8000

## 📁 Structure du projet

```
gestion-notes/
├── index.php              # Point d'entrée principal
├── database.sql           # Script de création de la table
├── database.sqlite        # Base de données SQLite (créée après installation)
├── style.css             # Feuille de style
│
├── models/               # Couche modèle
│   ├── db.php           # Connexion à la base de données
│   └── noteModel.php    # Fonctions CRUD pour les notes
│
├── controllers/          # Couche contrôleur
│   └── noteController.php # Logique de traitement
│
└── views/                # Couche vue
    ├── header.php       # En-tête HTML
    ├── footer.php       # Pied de page HTML
    ├── form.php         # Formulaire d'ajout
    └── notes.php        # Affichage des notes
```

## 🔒 Sécurité

- Utilisation de requêtes préparées PDO
- Protection contre les injections SQL
- Échappement des données avec htmlspecialchars()

## 👤 Auteur

Développé avec ❤️ pour le Training 2

## 📸 Captures d'écran

L'application permet de créer, afficher et supprimer des notes de manière simple et efficace.