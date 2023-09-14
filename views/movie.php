<?php

require '../controller/api.php';

$title = $result['results'];
$id = $_GET['id'];

foreach($title as $t) {
    if(stripslashes($t['id']) === $id) {
        echo "<ul>";
        echo "<li>" . stripslashes($t['original_title']) . "</li>";
        echo "<li><img src='https://image.tmdb.org/t/p/w500/" . stripslashes($t['backdrop_path']) . "?api_key=8756db543bd67b4620d8be9dbc42bc33'></li>";
        echo "<li><p>" . stripslashes($t['overview']) . "</p></li>";
        echo "<li><a href='/movie.php?id=" . stripslashes($t['id']) . "'>En savoir plus</a></li>";
        echo "</ul>";
    }
}

?>