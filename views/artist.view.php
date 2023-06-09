<?php require "partial/header.view.php"; ?>

	<h3>artists</h3>
	<ul>
		<?php foreach($artists as $artist) { ?>
			<li>
				<?= $artist["artist_name"] ?>
			</li>
		<?php } ?>
	</ul>
	
<?php require "partial/footer.view.php"; ?>