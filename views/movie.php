<?php

include '../controller/api.php';
include 'header.php';

$title = $result['results'];
$id = $_GET['id'];

if(isset($_GET['query'])) {
    $query = $_GET['query'];

    foreach($search as $t) { // On boucle sur les résultat de la recherche
        if(stripslashes($t['id']) === $id) { // On vérifie que l'id du film est le bon id
           ?>
    
        <header class="text-center py-5 bg-primary-lemon text-dark">
            <h1 class="display-4"><?php echo stripslashes($t['title']); ?></h1>
        </header>
    
        <div class="container my-5 margin-top__high">
            <div class="row">
                <div class="col-md-6">
                    <img id="movie__img" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($t['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Affiche du Film" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 main-h2">Résumé du Film</h2>
                    <p class="mt-5"><?php echo stripslashes($t['overview']); ?> </p>
                </div>
            </div>
        </div>
           <?php
        }
    }
} else {
    foreach($title as $t) { // On boucle sur les résultat de la recherche
        if(stripslashes($t['id']) === $id) { // On vérifie que l'id du film est le bon id
           ?>
    
        <header class="text-center py-5 bg-primary-lemon text-dark">
            <h1 class="display-4"><?php echo stripslashes($t['title']); ?></h1>
        </header>
    
        <div class="container my-5 margin-top__high">
            <div class="row">
                <div class="col-md-6">
                    <img id="movie__img" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($t['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Affiche du Film" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 main-h2">Résumé du Film</h2>
                    <p class="mt-5"><?php echo stripslashes($t['overview']); ?> </p>
                </div>
            </div>
        </div>
           <?php
        }
    }
}



?>

<div class="container my-5 text-center">
    <a href="/" class="btn btn-dark btn-lg btn-back my-5">
        Retour à l'accueil
    </a>
</div>

    <!-- Inclure le fichier JavaScript Bootstrap (optionnel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php

include 'footer.php';

?>