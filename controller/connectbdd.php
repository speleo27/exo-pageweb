<?php
$host = "localhost";
$dbname ="exopoo";
$user = "root";
$password = "";
try {
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8;', $user, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>