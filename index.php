<?php
require_once 'bdd.php';

// Je récupère les tâches existantes
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
    <meta name="description" content="Gérez efficacement vos tâches quotidiennes avec l'application My_todoList, et organisez mieux votre journée en ajoutant, modifier et supprimer facilement des tâches.">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>ToDo List</title>
</head>
<body>
    <div class="container">
        <h1>My Todo List</h1>
        <h2>Ajouter une Nouvelle Tâche</h2>
        <form action="traitementAjout.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required placeholder="Nouvelle tache">
            
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required placeholder="Nouvelle tache">
            <br>
            <button type="submit">Ajouter</button>
            <br>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                    <th></th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tache): ?>
                    <tr>
                        <td class="<?php echo $tache['realisee'] ? 'terminee' : ''; ?>"><strong><?php echo htmlspecialchars($tache['nom']); ?></strong></td>
                        <td class="<?php echo $tache['realisee'] ? 'terminee' : ''; ?>"><?php echo htmlspecialchars($tache['description']); ?></td>
                        <td class="<?php echo $tache['realisee'] ? 'terminee' : ''; ?>"><?php echo htmlspecialchars($tache['date_creation']); ?></td>
                        <td>
                            <a href="delete.php?id_taches=<?php echo $tache['id_taches']; ?>"><div class="fas fa-trash-alt"></div></a>
                            <a href="formulaireUpdate.php?id_taches=<?php echo $tache['id_taches']; ?>"><div class="fas fa-edit"></div></a>
                        </td>
                        <td>
                            <?php if ($tache['realisee']): ?>
                                <a href="marqueTerminee.php?id_taches=<?php echo $tache['id_taches']; ?>"><div class="fas fa-check-circle"></div></a>
                            <?php else: ?>
                                <a href="marqueTerminee.php?id_taches=<?php echo $tache['id_taches']; ?>"><div class="fas fa-circle"></div></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
