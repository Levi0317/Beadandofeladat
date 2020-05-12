<hr>

<?php if(IsUserLoggedIn()): ?>
	<a href="<?=ADMIN_BASE_URL?>"> Kezdőlap </a><br>
	<a href="<?=ADMIN_BASE_URL?>?P=logout"> Kijelentkezés, <?=$_SESSION['name']?></a><br>

<?php endif; ?>

<hr>
