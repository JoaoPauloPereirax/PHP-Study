<?php
interface figuraGeomemetrica{
    public function getTipo();
    public function getArea();
}

class quadrado implements figuraGeomemetrica{
    private float $l1;
    private float $l2;
    public function getTipo(){
        return 'quadrado';
    }

    public function getArea(){
        return $this->l1*$this->l2;
    }

    public function __construct($x,$y)
    {
        $this->l1=$x;
        $this->l2=$y;
    }
}

class circulo implements figuraGeomemetrica{
    private float $raio;
    public function __construct($r){
        $this->raio=$r;
    }
    public function getTipo(){
        return 'circulo';
    }
    public function getArea(){
        return pi()*$this->raio*$this->raio;
    }

}
$quadrado =new quadrado(5,5);
$circulo = new circulo(4);

$objetos=[
    $quadrado,$circulo
];

foreach($objetos as $objeto){//lembrando objeto é o item da vez
    $tipo = $objeto->getTipo();//várias classes diferentes têm a mesma forma
    $area = $objeto->getArea();//aplicação do método de uma classe sem saber qual é aquela classe
    echo "AREA ".$tipo." : ".$area."<br>";
}