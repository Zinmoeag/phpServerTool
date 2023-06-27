<?php require "partial/header.view.php"; ?>

	<?php foreach ($blogs as $blog) { ?>

		<h3><?= $blog["title"] ?></h3>

	<?php } ?>

<?php require "partial/footer.view.php"; ?>