<?php
class Funcionario{
    protected $nome;
    protected $salario;

    public function __construct($nome,$salario){
        $this -> nome = $nome;
        $this -> salario = $salario;
    }
    public function GetNome(){
        return $this -> nome;
    }
    public function SalarioBase(): float {
        return $this -> salario;
    }
}

?>