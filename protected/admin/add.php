<?php if(IsUserLoggedIn()): ?>
	<?php
	if(array_key_exists('submit', $_POST)) {

		$marka = $_POST['marka'];
		$tipus = $_POST['tipus'];
		$uzemanyag = $_POST['uzemanyag'];
		$forgalombahelyezes = $_POST['forgalombahelyezes_eve'];


		$query = "INSERT INTO `autok` (`marka`, `tipus`, `uzemanyag`, `forgalombahelyezes_eve`) VALUES (:marka, :tipus, :uzemanyag, :forgalombahelyezes_eve)";
		$params = [
			':marka' => $marka,
			':tipus' => $tipus,
			':uzemanyag' => $uzemanyag,
			':forgalombahelyezes_eve' => $forgalombahelyezes

		];
		require_once PROTECTED_DIR.'database.php';
		$success = executeDML($query, $params);
		if($success) echo 'Sikeres feltöltés';
		else echo 'Hiba történt';
	}
	?>

	<form method="post">
		<input type="text" name="marka" placeholder="Márka">
		<input type="text" name="tipus" placeholder="Típus">
		<input type="text" name="uzemanyag" placeholder="Üzemanyag">
		<input type="text" name="forgalombahelyezes_eve" placeholder="Forgalomba helyezés időpontja">
		<input type="submit" name="submit" value="Küldés">
	</form>
<?php endif; ?>
