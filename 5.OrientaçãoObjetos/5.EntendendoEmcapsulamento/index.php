<?php
//basicamente é sempre criar o set e o get por função
class nomeClass{
    public  int $like = 0;
    public int $id;
    private string $autor;
    public function setID($ID = 0){
        $this->id=$ID;
    }
    public function getID(){
        return $this->id;
    }
}
 $post1=new nomeClass();

 $post1->setID(210141363);

 echo "ID: ".$post1->getID();