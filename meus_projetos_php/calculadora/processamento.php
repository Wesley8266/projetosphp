<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
<body class="bg-blue-500 text-white p-10 text-center">
<?php
require 'calculadora.classe.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["n1"];
    $numero2 = $_POST["n2"];
    $operador = $_POST["operacoes"];
    
    $resultado = new Calculadora($numero1, $numero2,$operador);

    echo "<div class= ' 
    flex 
    flex-col 
    justify-center 
    items-center 
    p-10 
    m-500
    shadow 
    w-600
    text-white
    text-lg 
    bg-shadow 
    bg-blue-600 
    rounded '>

    <h1 class='text-3xl font-bold'> RESULTADO: </H1> <br>";
    echo $resultado->calcular() . "<br><br>";
    echo "<a href='index.php'>👈 VOLTAR A PAGINA ANTERIOR</a> </div>";
}
?>
</body>
</html>

