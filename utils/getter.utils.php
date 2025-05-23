<?php
require_once __DIR__ . "/../config.php";

function getMangaList(): array {
    include BASE_PATH . "/handlers/pageData.handlers.php";
    return $mangaList;
}

function getAnimeList(): array {
    include BASE_PATH . "/handlers/pageData.handlers.php";
    return $animeList;
}