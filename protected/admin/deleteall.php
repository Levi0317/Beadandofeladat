<?php
require_once PROTECTED_DIR.'database.php';
$query = "TRUNCATE TABLE autok";
$params=[];
$success = executeDML($query, $params);
if($success) echo "Sikeresen kitöröltél minden rekordot";
else echo "Nem sikerült törölni";
