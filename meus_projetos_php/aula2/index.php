<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste formulario</h2>
    <form action="" method="get">
        <label for="nome">SENHA</label>
        <input type="password" name="senha">

        <label for="nome">CONFIRMAR SENHA</label>
        <input type="password" name="confirmar">
        
        <input type="submit" value="enviar">
</form>
    <?php
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];
    if($senha == $confirmar){
        echo "bem vindo";
    }
    ?>
</body>
</html>