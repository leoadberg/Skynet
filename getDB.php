<?php
$json_file = file_get_contents('db.json');
$jfo = json_decode($json_file);
$posts = $jfo->posts;

foreach ($posts as $post) {
	echo "<div class=\"6u 12u(narrower)\">
			<section class=\"box special\">
			<span class=\"image featured\"><img src=\"pics/small/" . $post->img . ".JPG\" /></span>
			<h3>" . $post->title . "</h3>
			<p> . $post->desc . <p>
			<ul class=\"actions\">
			<li><a href=\"#\" class=\"button alt\">View Image</a></li>
			</ul></section></div>

			";
}

?>