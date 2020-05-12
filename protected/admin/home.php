
<?php
if(!IsUserLoggedIn())
    require_once PROTECTED_ADMIN_DIR.'login.php';
else if(array_key_exists('P', $_GET) && !empty($_GET['P'])) : ?>
    <a href="?P=add">Autó hozzáadása</a> <br>
    <a href="?P=deleteall">Minden rekord törlése</a> <br>
<?php 
    require_once PROTECTED_ADMIN_DIR.'list.php';
endif; ?>
