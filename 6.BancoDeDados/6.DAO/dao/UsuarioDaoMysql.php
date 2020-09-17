<?php
require_once 'models/Usuario.php';
class UsuarioDaoMysql implements UsuarioDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function create(Usuario $u){
        $sql = $this->pdo->prepare("INSERT INTO primeiratabela (nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();
        $u->setId($this->pdo->lastInsertId());
        return $u;
    }
    public function update(Usuario $u){
        $sql=$this->pdo->prepare("UPDATE primeiratabela SET nome=:nome, email=:email WHERE id=:id");
        $sql->bindValue(':nome',$u->getNome());
        $sql->bindValue(':email',$u->getEmail());
        $sql->bindValue(':id',$u->getId());
        $sql->execute();
        
        return true; 
    }
    public function delete($id){
        $sql=$this->pdo->prepare("DELETE FROM primeiratabela WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
    public function findAll(){
        $array = [];

        $sql=$this->pdo->query("SELECT * FROM primeiratabela");
        if($sql->rowCount()>0){
            $data = $sql->fetchAll();
            foreach($data as $item){
                $u=new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);
                $array[]=$u;
            }
        }


        return $array;
    }
    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM primeiratabela WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();
        if($sql->rowCount()>0){
            $data = $sql->fetch();
            $u=new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);
            return $u;
        }else{
            return false;
        }
    }
    public function findByEmail($email){
        $sql = $this->pdo->prepare("SELECT * FROM primeiratabela WHERE email = :email");
        $sql->bindValue(':email',$email);
        $sql->execute();
        if($sql->rowCount()>0){
            $data = $sql->fetch();
            $u=new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);
            return $u;
        }else{
            return false;
        }
    }
}
