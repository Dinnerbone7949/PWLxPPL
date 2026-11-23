<?php
require __DIR__ . "/repositories/movie-repositories.php";
$movies = getMovies();
echo '<pre>';
print_r($movies);
echo '</pre>';