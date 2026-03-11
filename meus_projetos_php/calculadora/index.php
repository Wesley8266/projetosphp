<?php
require "calculadora.classe.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-blue-500 text-white p-10 text-center">

    <h1 class="text-3xl font-bold">CALCULADORA</h1>

    <form action="processamento.php" method="post" class="shadow p-1 bg-blue-600 gap-10 ">

        <div class="flex flex-col items-center gap-col-10">
        
        <label for="numero1">NUMERO 1</label>
            <input type="number" id="numero1" name="n1" class="border p-1 mb-3 text-black rounded w-60" placeholder = "numero 1">
        <br>
        <br>

        <label for="operacao">OPERAÇÃO</label>
        <select id="operacao" name="operacoes" placeholder="operador" class="border p-1 mb-3 text-black rounded w-60">
            <option value="escolher_opcao">escolher operador</option>
            <option value="+">operação "+"</option>

            <option value="-">operação "-"</option>

            <option value="*">operação "*"</option>

            <option value="/">operação "/"</option>
        </select>
        <br>
        <br>

        <label for="numero2">NUMERO 2</label>
            <input type="number" id="numero2" name="n2" placeholder = "numero 2" class="border p-1 mb-3 text-black rounded w-60">
        <br>
        <br>
        <input type="submit" value="calcular" class="border p-5 text-black rounded bg-white mb-5 py-3 w-60 flex-col">
    </div>
    </form>

</body>
</html>
