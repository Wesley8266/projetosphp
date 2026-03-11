<?php

class Calculadora{

    public $n1;
    public $n2;
    public $operador;
    
    public function __construct($n1,$n2,$operador){
        $this-> n1 = $n1;
        $this-> n2 = $n2;
        $this-> operador = $operador;
    }

    public function calcular(){
        if($this -> n1 == "" || $this -> n2 == ""){
            return "insira valores validos";
        }else{
            switch($this-> operador){
                case "+":
                    return $this-> n1 + $this-> n2;
                    break;
                case "-":
                    return $this-> n1 - $this-> n2;
                    break;
                case "*":
                    return $this-> n1 * $this-> n2;
                    break;
                case "/":
                    if($this-> n2 == 0){
                        return "não é possivel dividir por 0!";
                        break;
                    }else{
                        return $this-> n1 / $this-> n2;
                        break;
                    }
                default:
                    return "insira um operador válido!";

            }
        } 
    }
}
?>