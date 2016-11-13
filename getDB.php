<?php
$json_file = file_get_contents('posts.json');
$jfo = json_decode($json_file);
$posts = $jfo->posts;

foreach ($posts as $post) {
    echo $post->title;
}

?>