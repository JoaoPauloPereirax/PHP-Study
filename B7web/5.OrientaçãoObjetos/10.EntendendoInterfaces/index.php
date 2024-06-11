<?php
//Uma interface é um guia de implementação uma classe


interface Database{
    public function listarProduto();
    public function adicionarProduto();
    public function alterarProduto();
    public function excluirProduto();
}

class mysqlDB implements Database{
    /* 
    Sempre que mexemos com banco de dados trabalhamos com
    - Leitura
    - Escrita
    - Alteração
    - Remoção
    */
    public function listarProduto(){    }
    public function adicionarProduto(){
        echo "Adicionando com MySQL_DB<br>";
    }
    public function alterarProduto(){    }
    public function excluirProduto(){    }
}

class oracleDB implements Database{
    public function listarProduto(){    }
    public function adicionarProduto(){
        echo "Adicionando com Oracle_DB<br>";
    }
    public function alterarProduto(){    }
    public function excluirProduto(){    }
}
//Com ORACLE
$produto1 = new oracleDB();
$produto1->adicionarProduto();
//Com MySQL
$produto2 = new mysqlDB();
$produto2->adicionarProduto();
