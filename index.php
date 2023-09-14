<?php 

include 'controller/api.php';
include 'views/header.php';

$title = $result['results'];

?>

<header class="py-5">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                    <h1 class="display-4">Titre de l'En-Tête</h1>
                    <h3 class="font-weight-light">Sous-Titre</h3>
                    <p class="lead">Un paragraphe de description qui présente votre contenu.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/cinema.jpg" alt="Image d'en-tête" class="img-fluid" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </header>

<div class="populary px-5">

<h2 class="d-flex justify-content-center pt-3 mt-5 display-3">Films à la une</h2>
    <div class="card-deck d-flex flex-wrap justify-content-around mx-5 my-5">

    <?php foreach($title as $t) { ?>

    <div class="card mx-2 my-4 shadow" style="width: 15rem;" onclick="location.href='/views/movie.php?id=<?php echo stripslashes($t['id']);?>';">
        <img class="card-img-top" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($t['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Card image cap">
        <div class="card-body">
        <h3 class="card-title text-center" style="font-size:1.2rem"><?php echo stripslashes($t['title']); ?></h3>
       <!-- <p class="card-text"><?php echo stripslashes($t['overview']); ?></p> -->
        </div>
        
        <div class="card-footer text-center">
        <i>Note : <?php echo stripslashes($t['vote_average']); ?>/10</i>
        </div>
    
    </div>

    <?php } ?>

    </div>
</div>

<?php
/**
foreach($title as $t) {
var_dump($t);
}
*/
include 'views/footer.php';
?>