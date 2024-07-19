<?php

require_once 'bdd.php';

$id_taches = intval($_GET['id_taches']);$
$realisee = intval($_GET['realisee']); // 0 pour non réalisée, 1 pour réalisée
$nom = $_POST['nom'];
$description = $_POST['description'];

$requete = $bdd->prepare("UPDATE tache SET nom=:nom, description =:description, realisee= :realisee 
						  WHERE id_taches =:id_taches");

$requete->execute(['id_taches' => $id_taches, 'realisee' => $realisee, 'nom' => $nom, 'description' => $description]);

header('Location:index.php');

// exit;

