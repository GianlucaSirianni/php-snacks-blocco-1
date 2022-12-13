<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$eta = $_GET['eta'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="nome" name="nome">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="eta" name="eta">

        <button type="submit">Invia</button>
    </form>

    <?php
    
    if(strlen($nome) > 3 && strpos($email, '.') != false && strpos($email, '@') != false && is_numeric($eta)){
        echo ('Access Granted');
    } else {
        echo ('Access Denied');
    }

    ?>

</body>
</html>