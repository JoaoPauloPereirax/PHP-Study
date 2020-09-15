<?php
class Usuario{
    private int $id;
    private $nome;
    private $email;
    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id=trim($i);
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome=ucwords(trim($n));
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email=trim($e);
    }
}

interface UsuarioDAO{
    public function create(Usuario $u);
    public function update(Usuario $u);
    public function delete($id);
    public function findAll();
    public function findById($id);
    public function findByEmail($email);
}

?>