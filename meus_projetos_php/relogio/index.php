<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1 class="titulo">HORARIO ATUAL</h1>

    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H:i');
    echo "<p class='hora'>" . $hora . "</p>";
    echo "<p class='hora'>" . date("d/m/Y") . "</p>";
?>

</body>
</html>