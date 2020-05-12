<?php
if(array_key_exists('login', $_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password))
        echo "Hiányozó bejelentkezési adat(ok)!";
    else if(!UserLogin($username, $password))
        echo "Helytelen bejelentkezési adatok";
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Felhasználónév"><br>
    <input type="password" name="password" placeholder="Jelszó"><br>
    <input type="submit" name="login" value="Bejelentkezés">
</form>

<a href="?P=register">Regisztráció</a>
