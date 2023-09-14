<?php 

//On récupere les films à la une via l'API

$url = 'https://api.themoviedb.org/3/discover/movie?&api_key=8756db543bd67b4620d8be9dbc42bc33';
$data = file_get_contents($url);
$result = json_decode($data, true);

// On récupere le résultat de la recherche utilisateur si une valeur est entrée

if(isset($_GET['query'])) {
    $query = $_GET['query'];

    $urlSearch = 'https://api.themoviedb.org/3/search/movie?query=' . $query . '&api_key=8756db543bd67b4620d8be9dbc42bc33';
    $dataSearch = file_get_contents($urlSearch);
    $resultSearch = json_decode($dataSearch, true);

    $search = $resultSearch['results'];
}

?>