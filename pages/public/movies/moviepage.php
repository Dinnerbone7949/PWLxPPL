<?php
require_once __DIR__ . "/../../../repositories/movie-repositories.php";
$movie = getMovie(htmlspecialchars($_GET['movie']));
$movie_title = $movie['title'];
$year = $movie['release_year'];
$categories = $movie['categories'];
$duration = floor($movie['duration'] / 60) . 'h ' . ($movie['duration'] % 60) . 'm';
$description = $movie['description'];
$synopsis = $movie['sinopsis'];
$movie_cover_path = $movie['cover_path'];
$content = "content.php";
$bannerimgpath = "../../../assets/images/banner/banner-temp.png";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $movie_title?></title>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/movie_banner.php"; ?>
    <main>
        <div id="main-panel">
            <?php include_once __DIR__ . "/../../../components/public/description.php"?>
            <?php include_once __DIR__ . "/../../../components/public/playmovie.php"?>
            <?php include_once __DIR__ . "/../../../components/public/synopsis.php"?>
        </div>
    </main>
    <?php include_once __DIR__ . "/../../../components/public/footer.php" ?>
</body>
</html>