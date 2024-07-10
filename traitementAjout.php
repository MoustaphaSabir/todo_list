<?php
require_once('fichier_bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titre = $_POST['titre'];
    $nom = $_POST['nom'];

    // Préparer et exécuter la requête pour insérer la nouvelle tâche
    $req = $bdd->prepare('INSERT INTO list_tache (titre, nom) VALUES (:titre, :nom)');
    $req->execute(['titre' => $titre, 'nom' => $nom]);

    // Rediriger vers la page principale
    header('Location: index.php');
    // exit;
}

// Requette pour supprimer une colonne

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer et exécuter la requête pour supprimer la tâche
    $req = $bdd->prepare('DELETE FROM list_tache WHERE id_taches = :id');
    $req->execute(['id' => $id]);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit;
}
?>

