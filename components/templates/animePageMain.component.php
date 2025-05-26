<?php
include __DIR__ . "/../../utils/Getter.utils.php";
include __DIR__ . "/../../utils/Display.utils.php";
$cssFile = "/pages/FavoriteAnimePage/assets/css/style.css";
?>
<link rel="stylesheet" href="<?php echo $cssFile; ?>">

<main>
    <h2>My Favorite Animes</h2>
    <div class="anime-list">
        <?php
        $type = "anime";
        $animeList = getAnimeList();
        displayCards($animeList, $type);
        ?>
    </div>
</main>