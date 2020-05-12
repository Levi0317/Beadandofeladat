<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once PROTECTED_DIR.'userManager.php'; ?>

<html>
<head>
	<meta charset="utf-8"/>
	<title>BEADANDÓ</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'style.css'; ?>">
</head>
<body>
	<div class="page">
		<?php require_once PROTECTED_DIR.'header.php'; ?>
		<?php require_once PROTECTED_DIR.'nav.php'; ?>
		<?php require_once PROTECTED_DIR.'routing.php'; ?>
		<?php require_once PROTECTED_DIR.'footer.php'; ?>
	</div>
</body>
</html>
