<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>artists</h3>
	<ul>
		<?php foreach($artists as $artist) { ?>
			<li>
				<?= $artist["artist_name"] ?>
			</li>
		<?php } ?>
	</ul>
</body>
</html>