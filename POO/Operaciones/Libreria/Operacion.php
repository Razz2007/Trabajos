<?php

class Operaciones{
    public $numUno;
    public $numDos;
    public $suma;
    public $resta;
    public $multiplicacion;
    public $division;

    public function sumar($numUno,$numDos){

        $this->suma= $numUno + $numDos;
        return $this->suma;
    }
    public function restar($numUno,$numDos){

        $this->resta= $numUno - $numDos;
        return $this->resta;
    }
    public function multiplicar($numUno,$numDos){

        $this->multiplicacion= $numUno * $numDos;
        return $this->multiplicacion;
    }
    public function dividir($numUno,$numDos){

        $this->division= $numUno / $numDos;
        return $this->division;
    }
}




?>