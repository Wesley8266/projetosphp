<?php
require_once "sistema.funcionarios.php";

class gerente extends Funcionario{
    private $bonus;

    public function __construct($nome, $salario, $bonus){
        parent:: __construct($nome, $salario);
        $this -> bonus = $bonus;
    }
    public function CalcularSalario(){
        return $this -> bonus + $this -> salario;
    }
}
?>