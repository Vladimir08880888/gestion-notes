<?php
// Script d'initialisation de la base de données
echo "Création de la base de données SQLite...\n";

try {
    // Créer la connexion à la base de données
    $pdo = new PDO("sqlite:./database.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Lire le fichier SQL
    $sql = file_get_contents('database.sql');
    
    // Exécuter la requête de création de table
    $pdo->exec($sql);
    
    echo "✅ Base de données créée avec succès!\n";
    echo "✅ Table 'notes' créée avec succès!\n\n";
    echo "Vous pouvez maintenant lancer l'application avec:\n";
    echo "php -S localhost:8000\n";
    
} catch (Exception $e) {
    echo "❌ Erreur lors de la création de la base de données : " . $e->getMessage() . "\n";
}