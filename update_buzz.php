<?php
// Connexion à la base de données
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=ny_blindtest;charset=utf8',
        'root',
        ''
);

// Vérifier si la requête est POST
    $identifiant = $_POST['identifiant'];
    if (empty($identifiant)) {
        die("Erreur : Tous les champs doivent être remplis.");
    }
    // Requête SQL pour mettre à jour "buzzé"
    $sqlQueryUp = 'UPDATE utilisateurs1 SET buzzé = :buzze WHERE identifiant = :identifiant';
    $updateUser = $mysqlClient->prepare($sqlQueryUp);
    $updateUser->execute([
        'buzze' => 1,
        'identifiant' => $identifiant,
    ]);

    echo "Buzz mis à jour avec succès."; 
// journal de bord : reçoit avec succès identifiant via $_POST il faut maintant que l'identifiant envoyé soit une variable qui contient l'identifant de celui qui se connecte.?>