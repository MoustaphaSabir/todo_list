<?php
// $bdd = new PDO('mysql:host=localhost;dbname=todo_list;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
    $bdd = new PDO('mysql:host=localhost;dbname=todo_list;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "Connexion réussie à la base de données.";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

