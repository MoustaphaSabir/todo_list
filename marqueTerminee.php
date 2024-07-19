<?php
// require_once 'bdd.php';

// $id_taches = intval($_GET['id_taches']);
// $realisee = intval($_GET['realisee']); 

// $requete = $bdd->prepare("UPDATE tache SET realisee=:realisee WHERE id_taches=:id_taches");
// $requete->execute(['id_taches' => $id_taches, 'realisee' => $realisee]);

// header('Location: index.php');
// exit;
require_once 'bdd.php';

if (isset($_POST['id_tache'])) {
    $id_tache = intval($_POST['id_tache']);
    $realisee = $_POST['realisee'];

    // Préparez la requête SQL pour mettre à jour l'état de la tâche
    $requete = "UPDATE tache SET realisee = 1 WHERE id_tache = :id";
    $reponses = $bdd->prepare($requete);
    $reponses->bindParam(':id', $id_tache, PDO::PARAM_INT);
    $reponses->execute();
    // Exécutez la requête
    header('Location: index.php'); 
        exit();
}
