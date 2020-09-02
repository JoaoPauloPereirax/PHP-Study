<?php
class post {
    private int $likes=0;
    private int $id;
    public function setId($i){
        $this->id=$i;
    }

    public function getId(){
        return $this->id;
    }

    public function setLikes($l){
        $this->likes=$l;
    }

    public function getLikes(){
        return $this->likes;
    }
}

class foto extends post{
    private string $url;
    public function __construct($id)
    {
        $this->setId($id); 
    }

    public function setUrl($u){
        $this->url=$u;
    }

    public function getUrl(){
        return $this->url;
    }
}

$foto = new foto(16061996);
$foto->setLikes(20);
$foto->setUrl('www.jp.com.br');
echo "FOTO: ".$foto->getId()." - ".$foto->getLikes()." - ".$foto->getUrl();
