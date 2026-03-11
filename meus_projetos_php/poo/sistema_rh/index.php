<?php
require_once "sistema.gerente.php";
require_once "sistema.estagiario.php";

$gerente = new gerente("carlos", 6000, 500);
$estagiario = new estagiario("ana", 900, 500);

echo "<h1> sistema de RH </h1>";
echo "<h2> GERENTE: </h2>";
echo "nome do gerente: " . $gerente -> GetNome() . "<br> " ." salario final: R$" . $gerente -> CalcularSalario();

echo "<h2>FUNCIONARIO: </h2>";
echo "nome do(a) estagiario(a): " . $estagiario -> GetNome() . "<br> " ."salario final: R$" . $estagiario-> CalcularSalario();


?>