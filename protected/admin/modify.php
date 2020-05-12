<?php if(IsUserLoggedIn()): ?>
    <?php
    if(array_key_exists('id', $_GET) && !empty($_GET['id'])) :

        if(array_key_exists('submit', $_POST)) {
            $id=$_POST['id'];
            $marka = $_POST['marka'];
            $tipus = $_POST['tipus'];
            $uzemanyag = $_POST['uzemanyag'];
            $forgalombahelyezes = $_POST['forgalombahelyezes_eve'];

            if($id == $_GET['id']) {

                $query = "UPDATE `autok` SET `marka` = :marka, `tipus` = :tipus, `uzemanyag` = :uzemanyag, `forgalombahelyezes_eve` = :forgalombahelyezes_eve WHERE `id` = :id";
                $params = [
                    ':marka' => $marka,
                    ':tipus' => $tipus,
                    ':uzemanyag' => $uzemanyag,
                    ':forgalombahelyezes_eve' => $forgalombahelyezes,
                    ':id' => $id
                ];
                require_once PROTECTED_DIR.'database.php';
                $success = executeDML($query, $params);
                if($success) header('Location: ?P=list');
                else echo 'Error during insert';
            } else echo 'ID-s don\'t match';
        }

        $query = "SELECT * FROM `autok` WHERE `id` = :id";
        $params = [
            ':id' => $_GET['id']
        ];
        require_once PROTECTED_DIR.'database.php';
        $record = getRecord($query, $params);
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?=$record['id']?>">
            <input type="text" name="marka" placeholder="Márka" value="<?=$record['marka']?>">
            <input type="text" name="tipus" placeholder="Típus" value="<?=$record['tipus']?>">
            <input type="text" name="uzemanyag" placeholder="Üzemanyag" value="<?=$record['uzemanyag']?>">
            <input type="text" name="forgalombahelyezes_eve" placeholder="Forgalomba helyezés éve" value="<?=$record['forgalombahelyezes_eve']?>">
            <input type="submit" name="submit" value="Küldés">
        </form>
    <?php endif; ?>
<?php endif; ?>
