<?php
$json_file = file_get_contents('db.json');
$jfo = json_decode($json_file);
$posts = $jfo->posts;

foreach ($posts as $post) {
    echo $post->title;
    echo "<br>";
}

?>