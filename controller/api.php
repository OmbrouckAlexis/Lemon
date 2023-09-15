<?php 

// On récupère la clé de l'API via le fichier de configuration
$path_config = parse_ini_file('config/tmdb.conf', true);
$tmdbKey = $path_config['TMDb']['key_TMDb'];

//On récupere les films à la une via l'API

$url = 'https://api.themoviedb.org/3/discover/movie?&api_key=' . $tmdbKey;
$data = file_get_contents($url);
$result = json_decode($data, true);

// On récupere le résultat de la recherche utilisateur si une valeur est entrée

if(isset($_GET['query'])) {
    $query = $_GET['query'];

    $urlSearch = 'https://api.themoviedb.org/3/search/movie?query=' . $query . '&api_key=' . $tmdbKey;
    $dataSearch = file_get_contents($urlSearch);
    $resultSearch = json_decode($dataSearch, true);

    $search = $resultSearch['results'];
}

?>