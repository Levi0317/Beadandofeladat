<?php if(IsUserLoggedIn()): ?>
    <?php
    $query = "SELECT * FROM autok";
    $params = [];
    require_once PROTECTED_DIR.'database.php';
    $records = getList($query, $params);
    ?>
    <?php if($records != null && !empty($records)): ?>
        <table>
            <tr>
                <th>Marka</th>
                <th>Tipus</th>
                <th>Uzemanyag</th>
                <th>Forgalomba helyezes eve</th>
                <th>Szerkesztés</th>
                <th>Törlés</th>
            </tr>
            <?php foreach ($records as $record): ?>
                <tr style="text-align: center;">
                    <td><?=$record['marka']?></td>
                    <td><?=$record['tipus']?></td>
                    <td><?=$record['uzemanyag']?></td>
                    <td><?=$record['forgalombahelyezes_eve']?></td>
                    <td><a href="?P=modify&id=<?=$record['id']?>">Szerkesztés</a></td>
                    <td><a href="?P=delete&D=<?=$record['id']?>">Törlés</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nincs autó az adatbázisban</p>
    <?php endif; ?>
<?php endif; ?>
