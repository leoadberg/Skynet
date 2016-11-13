<?php
$json_file = file_get_contents('db.json');
$jfo = json_decode($json_file);
$posts = $jfo->posts;

foreach ($posts as $post) {
    echo $post->title;
    echo "<br>";
    echo "<img src=\"pics/" . $post->img . ".JPG\" height=\"300\" width=\"400\">";
    echo "<br>";
}

?>