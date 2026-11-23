<img id="movie_poster" src="/../../<?= $movie_cover_path?>">
<div id="movie_text">
    <h1><?= $movie_title ?></h1>
    <div id="movie_paragraph">
        <p><?= $year ?></p>
        <?php foreach($categories as $category): ?>
            <p><?= $category ?></p>
        <?php endforeach ?>
        <p><?= $duration ?></p>
    </div>
</div>