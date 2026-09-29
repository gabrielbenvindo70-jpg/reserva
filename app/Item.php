<?php
namespace App;

class Item{
    public $id;
    public $nome;
    public $descricao;
    public $patrimonio;
    public function cadastrar(){
    
    $db = new DataBase('item');
    $db->insert([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'patrimonio' => $this->patrimonio
    ]);
    return true;
    }

    public function alterar(){
        return (new DataBase('item'))->update('id = '.$this->id,[
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'patrimonio' => $this->patrimonio
        ]);
    }

    public function excluir(){
        return (new DataBase('item'))->delete('id = '.$this->id);
    }
    public static function listar($where = null, $order = null, $limit = null) {
          return  (new DataBase('item'))->select()->fetchAll(\PDO::FETCH_CLASS,self::class);
}
}
$i =new Item();
$i->listar();


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
    
