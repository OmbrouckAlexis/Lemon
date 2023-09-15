<?php

include '../controller/api.php';
include 'header.php';


?>

<div class="populary px-5">

<h2 class="d-flex justify-content-center pt-3 mt-5 display-4 main-h2">Résultat pour "<?php echo $_GET['query']; ?>"</h2>
<div class="card-deck d-flex flex-wrap justify-content-around my-5">

        <?php 
        $i = 0;
        foreach($search as $s) { //On boucle sur le tableau de résulat données par l'API et on l'affiche au format HTML
        ?>

        <div class="card mx-2 my-4 shadow" onclick="location.href='/views/movie.php?id=<?php echo stripslashes($s['id']);?>&query=<?php echo $_GET['query']; ?>';">
            <img class="card-img-top" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($s['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Card image cap">
            
                <div class="card-body">
                    <h3 class="card-title text-center" style="font-size:1.8rem"><?php echo stripslashes($s['title']); ?></h3>
                    <p class="card-text px-3 py-3 overflow-hidden"><?php echo stripslashes($s['overview']); ?></p>
                </div>
            
            <div class="card-footer text-center">
                <i>Note : <?php echo stripslashes($s['vote_average']); ?>/10</i>
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

include 'footer.php';

?>

