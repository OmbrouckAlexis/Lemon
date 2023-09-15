<?php 

include 'controller/api.php';
include 'views/header.php';

// Variable qui retourne les film du moments grâce à l'API 
$title = $result['results'];

?>

<!-- Header page accueil -->

<header class="py-5">
        <div id="main__header" class="container">
            <div class="row ">
            <div class="col-md-6 py-5">
                    <h1 class="display-2 font-weight-bold primary-lemon">Lemon Movie</h1>
                    <h3 class="font-weight-light py-3">Les actualités cinéma en un clic</h3>
                    <p class="lead py-4">Vous ne savez pas quel film choisir pour votre soirée cinéma ?<br>
                    Lemon movie est là pour vous aider. Nous vous proposons les films du moment afin de vous aider à sélectionner le film idéal.<br></p>
                <p class="lead my-3"><strong>Le meilleur du 7e art réuni au même endroit.</strong></p>
                </div>
                <div class="col-md-6 px-5">
                    <img id="header__image" src="/assets/images/cameraman.png" alt="Lemon Movie" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <!-- Affichage des films à la une -->

<div class="populary px-5">

    <h2 class="d-flex justify-content-center pt-3 mt-5 pb-5 display-3 main-h2">Films à la une</h2>
        <div class="card-deck d-flex flex-wrap justify-content-around my-5">

        <?php 
        $i = 0;
        foreach($title as $t) { //On boucle sur le tableau de résulat données par l'API et on l'affiche au format HTML
        ?>

        <div class="card mx-2 my-4 shadow" onclick="location.href='/views/movie.php?id=<?php echo stripslashes($t['id']);?>';">
            <img class="card-img-top" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($t['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Card image cap">
            
                <div class="card-body">
                    <h3 class="card-title text-center" style="font-size:1.8rem"><?php echo stripslashes($t['title']); ?></h3>
                    <p class="card-text px-3 py-3"><?php echo stripslashes($t['overview']); ?></p>
                </div>
            
            <div class="card-footer text-center">
                <i>Note : <?php echo stripslashes($t['vote_average']); ?>/10</i>
            </div>
        </div>

        <?php 
            $i++;
            if($i == 12) { // On limite le nombre de film à 12 résultats.
                break;
            }
        } 
        ?>

    </div> 
</div>

<?php

include 'views/footer.php';

?>