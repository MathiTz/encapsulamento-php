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

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Programador();

/*echo $objeto->nome . "<br>"; // pode ser visto de fora da função
echo $objeto->idade . "<br>"; // só consegue acessar dentro da função ou o filho
echo $objeto->senha . "<br>"; // nem os herdeiros podem acessar, só a classe

quando é público, todo mundo vê.
quando é protegido, só em duas, na classe a na sua extensão.
quando é privado, só nela mesma, na mesma classe.

*/

$objeto->verDados();


?>