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

}
//    public function alterar()
// {
//     $db = new DataBase();

//     return $db->update($this->id, [
//         'nome' => $this->nome,
//         'descricao' => $this->descricao,
//         'patrimonio' => $this->patrimonio
//     ]);
// }

// public function excluir()
// {
//     $db = new DataBase();

//     return $db->delete($this->id);
// }

// public function select()
// {
//     $db = new DataBase();

//     return $db->select($this->id);
// }
    
