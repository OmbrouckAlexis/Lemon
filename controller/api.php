<?php 

$url = 'https://api.themoviedb.org/3/discover/movie?&api_key=8756db543bd67b4620d8be9dbc42bc33';

$data = file_get_contents($url);

$result = json_decode($data, true);

?>