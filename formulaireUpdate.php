<?php
require_once 'bdd.php';

// Sécuriser la récupération de l'ID des tâches
$id_taches = intval($_GET['id_taches']); // Convertir en entier pour éviter les injections

// Préparer et exécuter la requête en utilisant des paramètres
$requete = "SELECT * FROM tache WHERE id_taches = :id_taches";
$reponses = $bdd->prepare($requete);
$reponses->execute(['id_taches' => $id_taches]);
$tache = $reponses->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Update</title>
</head>
<body>
    <h2>Mettre à jour l'article</h2>
    <form action="traitementUpdate.php?id_taches=<?php echo $id_taches; ?>" method="post">
        
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required value="<?= htmlspecialchars($tache['nom']); ?>"><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?= htmlspecialchars($tache['description']); ?></textarea><br>

        <input type="submit" value="Modifier tâche">
        <input type="reset" value="Annuler">
    </form>
</body>
</html>
