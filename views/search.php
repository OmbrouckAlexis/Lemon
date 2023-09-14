<?php

include '../controller/api.php';
include 'header.php';

//var_dump($search);

?>

<div class="populary px-5">

<h2 class="d-flex justify-content-center pt-3 mt-5 display-3">Films à la une</h2>
    <div class="card-deck d-flex flex-wrap justify-content-around mx-5 my-5">

    <?php foreach($search as $s) { ?>

    <div class="card mx-2 my-4 shadow" style="width: 23rem;" onclick="location.href='/views/movie.php?id=<?php echo stripslashes($s['id']);?>';">
        <img class="card-img-top" src="https://image.tmdb.org/t/p/w500<?php echo stripslashes($s['backdrop_path']); ?>?api_key=8756db543bd67b4620d8be9dbc42bc33" alt="Card image cap">
        <div class="card-body">
        <h3 class="card-title text-center "><?php echo stripslashes($s['title']); ?></h3>
        <p class="card-text"><?php echo stripslashes($s['overview']); ?></p>
        </div>
        <!--
        <div class="card-footer text-center">
            <a href="/views/movie.php?id=<?php echo stripslashes($s['id']);?>" class="text-decoration-none fs-5 text-dark card-link">En savoir plus</a>
        </div>
    -->
    </div>

    <?php }
    ?>

    </div>
</div>

include 'footer.php';

?>

