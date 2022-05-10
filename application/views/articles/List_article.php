<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Llist of Article</title>
</head>
<body>

<h1>List Artikel</h1>
<ul>
	<?php foreach($articles as $article): ?> 
	<!-- didalam foreach terdapat perulangan karena pengiriman data lebih dari satu, fungsinya sama dengan for atau while -->
	<li><?= $article['title'] ?></li> 
	<!-- li atau list key nya title mengambil semua nilai yang ada di artikel pada title -->
	<?php endforeach ?>
</ul>

</body>
</html>