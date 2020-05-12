<?php
if(array_key_exists('register', $_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(empty($username) || empty($password) || empty($name) || empty($email))
        echo "Hiányozó adat(ok)!";
    else if(!UserRegister($username, $password, $name, $email))
        echo "Helytelen adatok";
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Felhasználónév"><br>
    <input type="password" name="password" placeholder="Jelszó"><br>
    <input type="text" name="name" placeholder="Név"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="submit" name="register" value="Regisztráció">
</form>

<a href="?P=login">Bejelentkezés</a>
