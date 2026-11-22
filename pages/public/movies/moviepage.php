<?php 
$movie_title = "";
$year = 0;
$category = "";
$duration = "";
$description = "";
$synopsis = "";
$movie_cover_path = "";
$content = "content.php";
$bannerimgpath = "../../../assets/images/banner/banner-temp.png";
?>
<!DOCTYPE html>
<html>
<head>
    <title>name</title>
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