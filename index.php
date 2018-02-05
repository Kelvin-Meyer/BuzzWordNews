<?php

function pick($someArray) {
    return $someArray[rand(0, count($someArray) - 1)];
}

$parties = file('party.txt');
$things = file('things.txt');
$evilThings = file('evilthings.txt');
$thumbnails = file('thumbnailLinks.txt');

//TITLE
$titles = array (
    pick($parties) . " is slachtoffer geworden van een grootschalige " . pick($things) . " aanval",
    pick($parties) . " doet onderzoek naar het voorkomen van " . pick($things),
    pick($parties) . " onderzoekt het inzetten van " . pick($things) . " tegen " . pick($evilThings),
    "Er moet belasting worden geheven op " . pick($things),
    pick($evilThings) . " steekt 40 miljoen in ontwikkeling van " . pick($things),
    "Aantal "  . pick($things) . " apparaten neemt toe",
    pick($evilThings) . " voert aanvallen uit op "  . pick($parties),
    ""
);
$title = pick($titles);
echo "<meta property='og:title' content='$title'>";
$description = "Dit is naar boven gekomen door een rapportage van het...";
echo "<meta property='og:description' content='$description'>";
$image = pick($thumbnails);
echo "<meta property='og:image' content='$image'>";
?>
<marquee>haha</marquee>

