<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Lemon Movie</title>
</head>
<body style="background-color: #f7f7f7;">

<?php 

include '../controller/log.php'; // fichier permettant l'écriture des logs 

?>

<nav class="navbar navbar-dark bg-dark px-5 py-3">
  <div class="container-fluid">
    <a href="/" class="navbar-brand">Lemon Movie</a>
    <form class="d-flex input-group w-auto" method="get" action="/views/search.php">
      <input type="search" name="query" class="form-control searchbar" placeholder="Trouver un film"/>
      <button class="btn btn-search my-2 my-sm-0 pl-3" type="submit">Rechercher</button>
    </form>
  </div>
</nav>