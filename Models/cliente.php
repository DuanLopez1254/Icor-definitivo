<?php
class cliente extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM productos");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}