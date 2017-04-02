<?php
$data = file_get_contents ("posts.json");
$posts= json_decode($data, true);
$post = json_decode($_POST['json']);
$posts[rand(1, 1000)] = $post;
$manage = json_encode($posts);
$myFile = "posts.json";
file_put_contents($myFile, $manage);

echo '{ "success": true }';
?>