<?php
$host = 'localhost';
$dbname = 'todo_list';
$root = 'root';
$password = '';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $root, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // echo "Connexion réussie à la base de données.";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


