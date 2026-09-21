<?php
namespace App;
use PDO;
use PDOExecption;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'reserva';
    private $connection;
    private $table;

    public function __construct($table = null){
       $this->setConnection();
    }
    
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:'.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
            //$this->connection->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECEPTION);
        }catch(PDOExecption $e){
            die('ERROR: '.$e->getMessage());
        }        
    }
    public function execute($querry, $values = null){
        try{echo "<pre>";
          print_r($querry);
          echo "<pre>";
            $statement = $this->connection->prepare($querry);
            $statement->execute($values);
            return $statement;
        }catch(PDOExecption $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function insert($array){
          $fields = array_keys($array);
          $blinds = array_pad([], count($array), '?');
          $querry = "INSERT INTO ".$this->table." (".implode(',',$fields).") VALUES ('".implode("','",$blinds)."')";
          $this->execute($querry,array_values($array));
          return true;
          
    }
          
    public function update($id,$array){
        
    }
    public function delete($id){
        
    }
    public function select(){
        
    }
}