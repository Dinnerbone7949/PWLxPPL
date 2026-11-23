<?php 
require __DIR__ . "/repositories/movie-repositories.php";
$bannerimgpath = "../../../assets/images/banner/banner-temp.png";
$content = "home.php";
$Watchme = "assets/images/logo/watchme.png";
$search = $_GET["search"] ?? '';
$category = $_GET["category"] ?? '';
$genre = $_GET["genre"] ?? '';
$year = $_GET["year"] ?? '';
$limit = 20;
$movies = getMovies($search, $limit, $category, $genre, $year);

?>

<!DOCTYPE html>
<html>
<head>
    <title>WatchMe: HD live streaming web</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/components/public/movie_banner.php"; ?>
    <main>
        <moviebar>
            <h1>Newest</h1>
            <section id="movierow">
                <?php
                    $year = date('Y');
                    $movies = getMovies($search, $limit, $category, $genre, $year);
                    foreach ($movies as $movie) { 
                        include __DIR__ . "/components/public/movie_cover.php";
                    }
                ?>
            </section>
        </moviebar>
        <moviebar>
            <h1>Classic</h1>
            <section id="movierow">
                <?php
                    $year = 2000;
                    $movies = getMoviesMinYearRange($year, $limit);
                    foreach ($movies as $movie) { 
                        include __DIR__ . "/components/public/movie_cover.php";
                    }
                ?>
            </section>
        </moviebar>
        <moviebar>
            <h1>Romance</h1>
            <section id="movierow">
                <?php
                    $genre = 'Romance';
                    $year = $_GET["year"] ?? '';
                    $movies = getMovies($search, $limit, $category, $genre, $year);
                    foreach ($movies as $movie) { 
                        include __DIR__ . "/components/public/movie_cover.php";
                    }
                ?>
            </section>
        </moviebar>
    </main>
    <?php include_once __DIR__ . "/components/public/footer.php" ?>
</body>
</html>