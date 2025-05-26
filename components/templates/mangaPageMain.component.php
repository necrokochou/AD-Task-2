<?php
include __DIR__ . "/../../utils/Getter.utils.php";
include __DIR__ . "/../../utils/Display.utils.php";
$cssFile = "/pages/FavoriteMangaPage/assets/css/style.css";
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