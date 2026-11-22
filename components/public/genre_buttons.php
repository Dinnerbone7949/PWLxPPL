<?php
$currentPage = $_SERVER['PHP_SELF'];
?>

<div>
    <div id="genre_button">
        <?php foreach ($genres as $genre):?>
            <a class="control_button pointer-button <?= $_GET['genre'] == $genre['name'] ? 'button_active' : '' ?>" href="?genre=<?= $genre['name'] ?>"><h3><?= $genre['name'] ?></h3></a>
        <?php endforeach?>
    </div>
</div>