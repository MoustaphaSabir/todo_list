<?php
$host = 'localhost';
$dbname = 'todo_list';
$root = 'root';
$password = '';

// $host = 'mysql-my-todo-list.alwaysdata.net';
// $dbname = 'my-todo-list_todo_list';

// $root = '370452';
// $password = 'Masta?66';


try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $root, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // echo "Connexion réussie à la base de données.";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


