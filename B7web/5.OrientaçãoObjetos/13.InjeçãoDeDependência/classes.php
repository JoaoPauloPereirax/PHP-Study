<?php
class basico1{
    public function somar($x,$y){
        return $x+$y;
    }
}

class basico2{
    public function somar($x,$y){
        $res=$x;
        for($q=0;$q<$y;$q++){
            $res++;
        }
        return $res;
    }
}

class matematica{
    private $basico;
    public function __construct($c){
        if($c==1){
            $this->basico=new basico1();
        }elseif($c==2){
            $this->basico=new basico2();
        }
    }

    public function somar($x,$y){
        return $this->basico->somar($x,$y);
    }

}

$mat1 = new matematica(2);
// ou $mat1 = new matematica(new basico1());
echo $mat1->somar(10,15);