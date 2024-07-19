<?php
require_once 'bdd.php';

// Je recupere les tâches existantes
$requete = "SELECT * FROM tache";
$reponses = $bdd->prepare($requete);
$reponses->execute();
$taches = $reponses->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gérez efficacement vos tâches quotidiennes avec l'application My_todoList, et organisez mieux votre journée en ajoutant et supprimant facilement des tâches.">
    <title>ToDo List</title>
</head>
<body>
    <h1>My Todo List</h1>

    <h2>Ajouter une Nouvelle Tâche</h2>
    <form action="traitementAjout.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required >
        
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
        <?php echo "<br>"; ?>
        <button type="submit">Ajouter</button>
        <?php echo "<br>"; ?>
    </form>
    <table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Date</th>
            <th>Actions</th>
            <th>Terminée</th> <!-- Nouvelle colonne pour indiquer si la tâche est terminée -->
        </tr>
    </thead>
        <tbody>
            <?php foreach ($taches as $tache): ?>
                <tr>
                    <td><strong><?php echo htmlspecialchars($tache['nom']); ?></strong></td>
                    <td><?php echo htmlspecialchars($tache['description']); ?></td>
                    <td><?php echo htmlspecialchars($tache['date_creation']); ?></td>
                    <td>
                        <a href="delete.php?id_taches=<?php echo $tache['id_taches']; ?>">Supprimer</a>
                        <a href="formulaireUpdate.php?id_taches=<?php echo $tache['id_taches']; ?>">Modifier</a>
                    </td>
                    <td>
                        <?php if ($tache['realisee']): ?>
                            <input type="checkbox">
                        <?php else: ?>
                            <a href="marqueTerminee.php?id_taches=<?php echo $tache['id_taches']; ?>">Terminer</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
