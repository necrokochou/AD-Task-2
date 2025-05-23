<?php
require_once __DIR__ . "/../../config.php";
include BASE_PATH . "/utils/Getter.utils.php";
include BASE_PATH . "/utils/Display.utils.php";
$cssFile = BASE_URL . "/pages/FavoriteMangaPage/assets/css/style.css";
?>
<link rel="stylesheet" href="<?php echo $cssFile; ?>">

<main>
    <h2>My Favorite Mangas</h2>
    <div class="manga-list">
        <?php
        $type = "manga";
        $mangaList = getMangaList();
        displayCards($mangaList, $type);
        ?>
    </div>
</main>