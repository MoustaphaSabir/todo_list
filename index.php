<?php
require_once('fichier_bdd.php');

// Je recupere les tâches existantes
$requete = "SELECT * FROM list_tache";
$reponses = $bdd->prepare($requete);
$reponses->execute();
$results = $reponses->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
</head>
<body>
    <h1>My ToDo List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Les Tâches</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($results as $list_tache): ?>
                    <tr>
                        <td><strong><?php echo htmlspecialchars($list_tache['titre']); ?></strong></td>
                        <td><?php echo htmlspecialchars($list_tache['nom']); ?></td>
                        <td><a href="traitementAjout.php?id=<?php echo $list_tache['id_taches']; ?>">Supprimer</a></td>
    
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Ajouter une Nouvelle Tâche</h2>
    <form action="traitementAjout.php" method="post">
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" required>
        <br>
        <label for="nom">Description:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <button type="submit">Ajouter</button>
    </form>

</body>
</html>
