<?php
    try {
        // chaine de connection : informations sur la base de données
        $strConnection = "mysql:host=localhost;dbname=programgym;port=3306";
        // nouvel objet pdo pour appliquer la connection  (chaine, username et password)
        $pdo = new PDO($strConnection, "root", "root", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    } catch (PDOException $e) {
        // récupération du message de l'exception
        $msg = 'ERREUR PDO dans ' .  $e->getMessage();
        // envoi du message dans la sortie, ici ce sera la page de l'utilisateur
        die($msg);
    }