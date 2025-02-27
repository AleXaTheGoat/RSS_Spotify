<?php
$rss = simplexml_load_file("https://anchor.fm/s/101758198/podcast/rss");

echo "<h2>Ultimi episodi del podcast</h2>";
echo "<ul>";

foreach ($rss->channel->item as $item) {
    echo "<li><a href='" . $item->link . "' target='_blank'>" . $item->title . "</a></li>";
}

echo "</ul>";
?>
