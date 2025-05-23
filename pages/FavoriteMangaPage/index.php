<?php
require_once __DIR__ . "/../../config.php";
require_once BASE_PATH . "/utils/Require.utils.php";
$pageTitle = "Favorite Manga";
$cssFile = BASE_URL . "/pages/FavoriteMangaPage/assets/css/style.css";
headComponent($pageTitle, $cssFile);
?>

<body>
    <?php
    include BASE_PATH . "/components/templates/header.component.php";
    include BASE_PATH . "/components/templates/mangaPageMain.component.php";
    include BASE_PATH . "/components/templates/footer.component.php";
    ?>
</body>