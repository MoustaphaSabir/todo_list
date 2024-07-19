<?php
require_once 'bdd.php';
// Requette pour supprimer une colonne

if (isset($_GET['id_taches'])) {
    $id = $_GET['id_taches'];

    // Préparer et exécuter la requête pour supprimer la tâche
    $req = $bdd->prepare('DELETE FROM tache WHERE id_taches = :id_taches');
    $req->execute(['id_taches' => $id]);

    // Rediriger vers la page principale
    header('Location: index.php');
    exit;
}

