<?php
//Herança em classes
class postagem{
    private int $id;
    private int $likes = 0;
    public function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }
    public function setLikes($j){
        $this->likes=$j;
    }
    public function getLikes(){
        return $this->likes;
    }
}

class foto extends postagem {
    /* Basicamente a classe foto vai herdar todas propriedades da classe postagem */
    private $url;
    
    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($u){
        $this->url = $u;
    }

    public function getUrl(){
        return $this->url;
    }

}

class texto extends postagem{
    private string $body;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setBody($b){
        $this->body=$b;
    }
    public function getBody(){
        return $this->body;
    }
}
