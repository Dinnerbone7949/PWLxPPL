<?php 
$rating = 4.9;
$year = 2026;
$mainCharacter = "Tom Holland";
$categorizer = "Trending Now";
$bannerMovieTitle = "Spiderman - Brand New Day";
$bannerMovieDescription = "Peter Parker kembali menjalani hidup sebagai Spider-Man setelah berbagai perubahan besar dalam hidupnya. Kini, ia menghadapi ancaman baru yang memaksanya mempertaruhkan segalanya demi melindungi orang-orang di sekitarnya. Peter harus menemukan cara untuk menyeimbangkan kehidupan pribadinya dengan tanggung jawab sebagai pahlawan.";
$bannerImagePath = "/assets/images/banner/banner.png";
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