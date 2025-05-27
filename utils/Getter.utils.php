<?php
function getMangaList(): array {
    include __DIR__ . "/../handlers/pageData.handlers.php";
    return $mangaList;
}

function getAnimeList(): array {
    include __DIR__ . "/../handlers/pageData.handlers.php";
    return $animeList;
}
