<?php
$currentPage = $_SERVER['PHP_SELF'];
?>
<div id="button_div">
    <?php foreach ($categories as $category):?>
        <a class="control_button categories pointer-button <?= isset($_GET['category']) && $_GET['category'] == $category['name'] ? 'button_active' : '' ?>" href="?category=<?= $category['name'] ?>"><h3><?= $category['name'] ?></h3></a>
    <?php endforeach?>
</div>