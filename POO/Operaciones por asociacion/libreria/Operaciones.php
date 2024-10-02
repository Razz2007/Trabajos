<?php

class Operaciones {
    private $num1;
    private $num2;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    public function __construct(Numero $num1, Numero $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function sumar() {
        $this->suma = $this->num1->getValor() + $this->num2->getValor();
        return $this->suma;
    }
    public function restar() {
        $this->suma = $this->num1->getValor() - $this->num2->getValor();
        return $this->suma;
    }
    public function Multiplicar() {
        $this->suma = $this->num1->getValor() * $this->num2->getValor();
        return $this->suma;
    }
    public function dividir() {
        $this->suma = $this->num1->getValor() / $this->num2->getValor();
        return $this->suma;
    }




}



?>