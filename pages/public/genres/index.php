<?php
require_once __DIR__ . "/../../../repositories/genre-repositories.php";
$banner_title = genreCheck()[0];
$banner_paragraph = genreCheck()[1];
$bannerimgpath = genreCheck()[2];
$content = "genre.php";
$genres = getGenres();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $_GET["genre"] ?? 'Genre' ?></title>
    <link rel="stylesheet" href="../../../styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/movie_banner.php"; ?>
    <main>
        <?php include __DIR__ . "/../../../components/public/genre_buttons.php"; ?>
        <?php include __DIR__ . "/../../../components/public/movies.php"; ?>
    </main>
    <?php include_once __DIR__ . "/../../../components/public/footer.php" ?>
</body>
</html>