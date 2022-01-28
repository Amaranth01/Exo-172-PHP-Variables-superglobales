<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

<?php

echo "Bienvenue";

echo "<a href='idUser.php'>id User</a><br>";
echo "<a href='page2.php'>Page 2</a><br>";
echo "<a href='page3.php'>Page 3(cookie)</a><br>";
echo "<a href='page4.php'>Page 4(modif cookie)</a><br><br>";
?>

<div id="container">
    <form action="page3.php" method="post">

        <div>
            <label for="login">Login: </label>
            <input type="text" name="login" id="login" maxlength="20">
        </div>

        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password" maxlength="15">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</div>

</body>
</html>