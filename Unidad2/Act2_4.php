<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $saldo = "1000";
    $ingreso = 250;

    $saldo_int = (int) $saldo;
    $saldo_int += $ingreso;

    echo $saldo<1200 ? "Cliente Vip" : "Cliente Normal";

    ?>
</body>
</html>