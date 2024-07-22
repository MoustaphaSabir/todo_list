<?php
require_once 'bdd.php';

if (isset($_GET['id_taches'])) {
    $id = (int) $_GET['id_taches'];

    // On récupère l'état actuel de la tâche
    $requete = "SELECT realisee FROM tache WHERE id_taches = :id";
    $reponse = $bdd->prepare($requete);
    $reponse->bindParam(':id', $id, PDO::PARAM_INT);
    $reponse->execute();
    $tache = $reponse->fetch(PDO::FETCH_ASSOC);

    if ($tache) {
      
        $nouvelletache = $tache['realisee'] ? 0 : 1;

        // On met à jour l'état de la tâche 
        $requeteUpdate = "UPDATE tache SET realisee = :nouvelletache WHERE id_taches = :id";
        $reponseUpdate = $bdd->prepare($requeteUpdate);
        $reponseUpdate->bindParam(':nouvelletache', $nouvelletache, PDO::PARAM_INT);
        $reponseUpdate->bindParam(':id', $id, PDO::PARAM_INT);
        $reponseUpdate->execute();
    }
}

// Rediriger vers la page principale après mise à jour
header('Location: index.php');
exit;


