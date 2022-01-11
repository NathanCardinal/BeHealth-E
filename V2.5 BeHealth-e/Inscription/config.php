<?php
define("HOST", "localhost");
define("DB_NAME", "behealthe");
define("USER", "root");
define("PASS", "root");

// Connexion Ã  la database MySQL 
global $db;
try {
    $db = new PDO("mysql:host=" . HOST . ";port=3306;dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
} catch (PDOException $e) {
    throw $e;
}

?>