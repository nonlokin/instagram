<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");	

	$text_zaprosa = "UPDATE posts
	SET text = '{$_GET["text"]}', img = '{$_GET["img"]}'
	WHERE id = {$_GET["id"]}";
	mysqli_query($connect, $text_zaprosa);
	header("Location: index.php");
?>