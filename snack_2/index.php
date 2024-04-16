<?php
var_dump($_GET);


if (strlen($_GET['name']) >= 3 && strpos($_GET['email'], '.') !== false && strpos($_GET['email'], '@') !== false && is_numeric($_GET['age'])) {
    echo ('accesso riuscito');
} else {
    echo ('accesso negato');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
        <input type="email" name="email" placeholder="Inserisci la tua email" id="">
        <input type="number" name="age" placeholder="Inserisci la tua età" id="">
        <button type="submit">Clicca per inviare</button>
    </form>
</body>

</html>