<?php
if (isset($_POST["title"])) {
	$json_file = file_get_contents('db.json');
	$jfo = json_decode($json_file);
	$posts = $jfo->posts;
	$id = $posts[0]->id + 1;
	$arr = array("title" => $_POST["title"],
				"desc" => $_POST["desc"],
				"id" => $id);
	array_unshift($posts, $arr);
	$newJsonString = json_encode($jfo);
	file_put_contents('db.json', $newJsonString);
}
?>