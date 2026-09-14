<?php
namespace App;

class Item{
    public $id;
    public $nome;
    public $descricao;
    public $patrimonio;
    public function cadastrar(){
    
    $db = new DataBase();
    $db->insert([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'patrimonio' => $this->patrimonio
    ]);
    return true;
    }
    public function alterar(){
        $db = new DataBase();
    return $db->update([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'patrimonio' => $this->patrimonio
    ]);
    return true;
    }
    public function excluir(){
    return (new DataBase()->delete($this->id));
    }
    public function select(){
    return(new DataBase()->select($this->id));
    }
}