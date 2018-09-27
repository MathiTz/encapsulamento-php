<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Pessoa();

/*echo $objeto->nome . "<br>"; // pode ser visto de fora da função
echo $objeto->idade . "<br>"; // só consegue acessar dentro da função ou o filho
echo $objeto->senha . "<br>"; // nem os herdeiros podem acessar, só a classe
*/

$objeto->verDados();


?>