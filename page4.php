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
    <title>Document</title>
</head>
<body>
<div id="container">
    <form action="page3.php" method="post">
        <div>
            <label for="login">New login: </label>
            <input type="text" name="login" id="login" maxlength="20">
        </div>
        <div>
            <label for="password">New mot de passe: </label>
            <input type="password" name="password" id="password" maxlength="15">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</div>
</body>
</html>