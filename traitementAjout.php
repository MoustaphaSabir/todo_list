<?php
    require_once 'bdd.php';

    $nom = $_POST['nom'];
    $description = $_POST['description'];

    // Préparer et exécuter la requête pour insérer la nouvelle tâche
    $req = $bdd->prepare('INSERT INTO tache (nom, description) VALUES (:nom, :description)');
    $req->execute(['nom' => $nom, 'description' => $description]);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit;



