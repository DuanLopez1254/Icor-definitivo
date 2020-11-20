<?php
class admin extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM comentarios where id_esta = 2  ORDER BY id_co DESC LIMIT 6");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function ale(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM comentarios where id_esta = 1 ORDER BY id_co DESC ");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicaciones (title, descripcion, important, image, user, id_user) VALUES (?,?,?,?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['important'], PDO::PARAM_STR);
            $result->bindParam(4, $data['rutas'], PDO::PARAM_STR);
            $result->bindParam(5, $data['user'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id_user'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error publi->register() " . $e->getMessage());
        }
    }
    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}