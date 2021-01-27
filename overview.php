<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Good Games - track your collection of Games</title>
</head>
<body>

<h1>Good Games - track your collection of Games</h1>

<form action="" method="POST">  
    <input type="text" id="game" name="game" placeholder="add new game">
	<br>
    <input type="submit" name="submit" value="Submit">
	<br>
</form>

<ol>
<?php foreach ($cards as $card) : ?>
    <li><?= $card['name'] ?><span style="font-size: 15px;"><a href="edit.php?id=<?= $card['id'] ?>&name=<?= $card['name'] ?>">: ChangeGameName</a></span></li>
<?php endforeach; ?>
</ol>

</body>
</html>