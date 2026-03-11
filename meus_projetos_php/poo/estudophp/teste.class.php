<?php
class Pessoa{
    public $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this -> nome =  $nome;
        $this -> idade =  $idade;
    }
    public function getnome(){
        return $this -> nome;
    }
    public function idade(){
        return $this -> idade;
    }
    public function verificarIdade(){
        if($this -> idade >= 18){
        return "pode tirar a carteira";
        }else{
        return "não pode tirar a carteira";
    }
    }
}
$nome = new Pessoa ("wesley", 18);
echo "nome: " . $nome -> GetNome() . "<br> " . "idade: " . $nome-> idade() ."<br>" . "status: " . $nome->verificarIdade();

// class Pessoa {

//     private $nome;

//     public function __set($atributo, $valor){

//         if($atributo === "nome"){
//             $this->nome = $valor;
//         }
//     }

//     public function __get($atributo){
//         if($atributo === "nome"){
//             return $this->nome;
//         }
//     }
// }

// $p = new Pessoa();

// $p->nome = "Carlos"; // ✔ chama __set()

// echo $p->nome; // ✔ chama __get()
?>