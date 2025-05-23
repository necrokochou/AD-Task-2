<?php
require_once __DIR__ . "/../../config.php";
$cssFile = BASE_URL . "/components/cssComponents/header.component.css";
?>
<link rel="stylesheet" href="<?php echo $cssFile; ?>">

<header>
    <a class="dev" href="https://github.com/necrokochou" target="_blank"><strong>paruparo</strong></a>
    <nav class="nav">
        <a class="nav-button" href="<?php echo BASE_URL . "/index.php"; ?>">HOME</a>
        <a class="nav-button" href="<?php echo BASE_URL . "/pages/FavoriteMangaPage/index.php"; ?>">MANGA</a>
        <a class="nav-button" href="<?php echo BASE_URL . "/pages/FavoriteAnimePage/index.php"; ?>">ANIME</a>
    </nav>
</header>