<?php
include __DIR__ . "/../../handlers/pageData.handlers.php";
include __DIR__ . "/../../utils/Getter.utils.php";
include __DIR__ . "/../../utils/Display.utils.php";
$cssFile = "/assets/css/style.css";
?>
<link rel="stylesheet" href="<?php echo $cssFile; ?>">

<main style="background-image: url('/assets/img/shiori-novella.gif')">
    <section class="middle container">
        <h1>HOMEPAGE</h1>
        <span class="line"></span>
        <p><strong>AD Task 2</strong></p>
        <span class="line"></span>
        <p class="description">
            A sample project that displays programming basics such as arrays, dictionaries, functions, and fragmentation.
            Designed and themed based on a manga-reading and anime-streaming website.
        </p>
        <p class="info">
            This project includes two pages:<br>
            <a class="quick-link" href="/index.php">Home Page</a>,
            <a class="quick-link" href="/pages/FavoriteMangaPage/index.php">My Favorite Manga</a>, and
            <a class="quick-link" href="/pages/FavoriteAnimePage/index.php">My Favorite Anime</a>
        </p>
        <span class="line"></span>
        <img src="/assets/img/hololive-bancho.gif" alt="Hololive Bancho - Todoroki Hajime" class="bancho">
        <span class="line"></span>
        <p class="student">
            <strong>Joseph Aiden Reilly C. Flores</strong><br>
            BSITAGD<br>
        </p>
    </section>
</main>