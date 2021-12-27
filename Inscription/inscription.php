<?php

    try {
        // Connexion à la BDD
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        // Traitement des erreurs, vérification de connexion
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];

    echo $nom;

?>