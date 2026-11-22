<?php 
require_once __DIR__ . "/../../../repositories/category-repositories.php";
$banner_title = categoryCheck()[0];
$banner_paragraph = categoryCheck()[1];
$bannerimgpath = categoryCheck()[2];
$content = "category.php";
$categories = getCategories();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $_GET["category"] ?? 'Category' ?></title>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="icon" href="/assets/images/logo/watchme.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__ . "/../../../components/public/navbar.php"; ?>
    <?php include_once __DIR__ . "/../../../components/public/movie_banner.php"; ?>
    <main>
        <?php include __DIR__ . "/../../../components/public/category_buttons.php"; ?>
        <?php include __DIR__ . "/../../../components/public/movies.php"; ?>
    </main>
    <?php include_once __DIR__ . "/../../../components/public/footer.php" ?>
</body>
</html>