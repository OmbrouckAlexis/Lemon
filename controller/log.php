<?php

// Création du script permmetant d'écrire l'historique des recherches dans le fichier /logs/hostory-search.log

    if(isset($_GET['query'])) { // On verifie qu'un recherche à eu lieu
        $query = $_GET['query'];
        $log = "[" . date('Y-m-d H:i:s') . "] Recherche : " . $query . PHP_EOL; // Ecriture de la ligne de log
        $path = '../logs/history-search.log';
        $open_file = fopen($path, 'a'); // On ouvre le fichier de log en mode ecriture
        fwrite($open_file, $log); // On ajoute la ligne de log
        fclose($open_file); // On ferme le fichier
    }
    
?>