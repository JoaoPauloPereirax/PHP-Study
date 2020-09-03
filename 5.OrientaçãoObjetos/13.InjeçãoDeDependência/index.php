<?php
class DatabaseInterface{
    /* ELa vai conter os seguintes comandos
    Listar
    Selecionar 1 item
    Inserir
    Atualizar
    Deletar
    ...manipulação de base de dados
    */
    private $engine;
    public function __construct(DatabaseInterface $eng){
        $this->engine = $eng;
    }
    public function listarTudo(){
        return $this->engine->listar();
    }
}

class MysqlEngine implements DatabaseInterface {
    public function listar(){
        echo "MySQLEngine<br>";
    }
}

class OracleEngine implements DatabaseInterface {
    public function listar(){
        echo "OracleEngine<br>";
    }
}

class MongoEngine implements DatabaseInterface {
    public function listar(){
        echo "MongoEngine";
    }
}

$db = new DatabaseInterface(new MysqlEngine());
$db->listarTudo();