<?php
$currentPage = $_SERVER['PHP_SELF'];
?>
<a class="movie pointer-button" href="<?= (strpos($currentPage, '/pages/public/') === 0 ? '../../../' : '') ?>pages/public/movies/moviepage.php?movie=<?= $movie['movie_id'] ?>">
    <img class="cover" src="<?= (strpos($currentPage, '/pages/public/') === 0 ? '../../../' : '') ?><?=$movie['cover_path'] ?>">
    <div class="movie-bottom-text">
        <div class="movie-card-title">
            <span><?= $movie['title'] ?></span>
            <p><?= $movie['release_year'] ?></p>
        </div>
    </div>
</a>