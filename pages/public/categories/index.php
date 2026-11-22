<?php 
$bannerimgpath = "../../../assets/images/banner/banner-temp.png";
?>

<!DOCTYPE html>
<html>
<head>
    <title>categories</title>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/banner.php"; ?>
    <main>
        <?php include __DIR__ . "/../../../components/public/movies.php"; ?>
        <?php include __DIR__ . "/../../../components/public/movies.php"; ?>
    </main>
    <?php include_once __DIR__ . "/../../../components/public/footer.php" ?>
</body>
</html>