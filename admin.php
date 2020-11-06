<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "lesson22");
?>
	<div class="col-4 mx-auto border-top pt-5">
		<h1 class="text-center">Добавить пост</h1>
		<form action="insert.php" method="GET">
			<input type="" name="user" class="form-control mt-5" placeholder="Автор">
			<input type="" name="img" class="form-control mt-2" placeholder="Картинка">
			<input type="" name="text" class="form-control mt-2" placeholder="Текст">
			<button class="btn bg-success mt-2 text-white" style="margin-left:230px;">Добавить пост</button>
		</form>
	</div>



</body>
</html>