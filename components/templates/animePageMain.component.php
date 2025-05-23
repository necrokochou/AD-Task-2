<?php
require_once __DIR__ . "/../../config.php";
include BASE_PATH . "/utils/getter.utils.php";
include BASE_PATH . "/utils/display.utils.php";
$cssFile = BASE_URL . "/pages/FavoriteAnimePage/assets/css/style.css";
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