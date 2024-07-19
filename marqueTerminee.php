<?php

require_once 'bdd.php';

// Recuperer l'information du lien (est ce qu'il faut mettre fini ou en cours)
// En fonction de ça, dans ta requete tu devras changer par true ou false

if (isset($_GET['id_taches'])) {
    $id_tache = intval($_GET['id_taches']);

    // Préparez la requête SQL pour mettre à jour l'état de la tâche
    $requete = "UPDATE tache SET realisee = true WHERE id_taches = :id";
    $reponses = $bdd->prepare($requete);
    $reponses->bindParam(':id', $id_tache, PDO::PARAM_INT);
    $reponses->execute();
    // Exécutez la requête
    header('Location: index.php'); 
    exit();
}
