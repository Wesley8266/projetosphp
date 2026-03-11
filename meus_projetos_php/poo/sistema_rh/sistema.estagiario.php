<?php
require_once "sistema.funcionarios.php";

class estagiario extends Funcionario{
    private $auxilio;

    public function __construct($nome, $salario, $auxilio){
        parent:: __construct($nome, $salario);
        $this -> auxilio = $auxilio;
    }
    public function CalcularSalario(){
        return $this -> auxilio + $this -> salario;
    }
}
?>