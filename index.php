<?php 
$bannerimgpath = "../../../assets/images/banner/banner-temp.png";
$content = "home.php";
$Watchme = "assets/images/logo/watchme.png"
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
        <?php include __DIR__ . "/components/public/movie_rows.php"; ?>
        <?php include __DIR__ . "/components/public/movie_rows.php"; ?>
        <?php include __DIR__ . "/components/public/movie_rows.php"; ?>
    </main>
    <?php include_once __DIR__ . "/components/public/footer.php" ?>
</body>
</html>