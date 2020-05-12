<?php if(IsUserLoggedIn()): ?>
    <?php
    $query = "SELECT * FROM autok";
    $params = [];
    require_once PROTECTED_DIR.'database.php';
    $records = getList($query, $params);


    if(array_key_exists('D', $_GET) && !empty($_GET['D'])) {
    $query = "DELETE FROM autok WHERE id = :id";
    $params = [ ':id' => $_GET['D'] ];
    require_once PROTECTED_DIR.'database.php';
    $success = executeDML($query, $params);
    if($success) echo "Sikeresen törölted";
    else echo "Nem sikerült törölni";
    }?>
<?php endif; ?>
