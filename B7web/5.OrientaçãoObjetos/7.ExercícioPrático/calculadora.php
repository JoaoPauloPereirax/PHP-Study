<?php
class exoo{
    private int $total = 0;

    public function __construct($var)
    {
        $this->total=$var;
    }

    public function getTotal(){
        return $this->total;
    }

    public function mais($y){
        $this->total+=$y;
    }
    public function menos($y){
        $this->total-=$y;
    }
    public function vezes($y){
        $this->total*=$y;
    }
    public function dividir($y){
        $this->total/=$y;
    }
}