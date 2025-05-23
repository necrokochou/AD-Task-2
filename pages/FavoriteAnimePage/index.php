<?php
require_once __DIR__ . "/../../config.php";
require_once BASE_PATH . "/utils/require.utils.php";
$pageTitle = "Favorite Anime";
$cssFile = BASE_URL . "/pages/FavoriteAnimePage/assets/css/style.css";
headComponent($pageTitle, $cssFile);
?>

<body>
    <?php
    include BASE_PATH . "/components/templates/header.component.php";
    include BASE_PATH . "/components/templates/animePageMain.component.php";
    include BASE_PATH . "/components/templates/footer.component.php";
    ?>
</body>