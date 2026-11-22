<?php
$currentPage = $_SERVER['PHP_SELF'];
?>
<div id="button_div">
    <?php foreach ($genres as $genre):?>
        <a class="control_button pointer-button genres <?= isset($_GET['genre']) && $_GET['genre'] == $genre['name'] ? 'button_active' : '' ?>" href="?genre=<?= $genre['name'] ?>"><h3><?= $genre['name'] ?></h3></a>
    <?php endforeach?>
</div>