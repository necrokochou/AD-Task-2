<?php
require_once __DIR__ . "/../../utils/Require.utils.php";
$pageTitle = "Favorite Manga";
$cssFile = "/pages/FavoriteMangaPage/assets/css/style.css";
headComponent($pageTitle, $cssFile);
?>

<body>
    <?php
    include __DIR__ . "/../../components/templates/header.component.php";
    include __DIR__ . "/../../components/templates/mangaPageMain.component.php";
    include __DIR__ . "/../../components/templates/footer.component.php";
    ?>
</body>