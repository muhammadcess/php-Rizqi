<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PHP</title>
</head>

<body>
    <?php
    $arrayTampung = array("PHP", "JAVASCRIPT", "LARAVEL",);
    $implode = implode("-", $arrayTampung);
    echo $implode;
    ?>
</body>

</html>