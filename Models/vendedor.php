<?php
//Herencia
class vendedor extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM comentarios WHERE id_esta = 1
            ORDER BY id_co DESC LIMIT 6");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function ale(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM comentarios WHERE id_esta = 1
            ORDER BY id_co DESC LIMIT 6, 1000");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
public function register($data){
    try{
        $result = parent::connect()->prepare("INSERT INTO users (name,email,Id_doc,num_doc,phone,password) VALUES (?,?,?,?,?,?)");
        $result->bindParam(1, $data['name'], PDO::PARAM_STR);
        $result->bindParam(2, $data['email'], PDO::PARAM_STR);
        $result->bindParam(3, $data['Id_doc'], PDO::PARAM_STR);
        $result->bindParam(4, $data['num_doc'], PDO::PARAM_STR);
        $result->bindParam(5, $data['phone'], PDO::PARAM_STR);
        $result->bindParam(6, $data['password'], PDO::PARAM_STR);
        return $result->execute();
    }catch (Exception $e){
       die("Error index->register() " . $e->getMessage());
    }
}
public function registers($data){
    try{
        $result = parent::connect()->prepare("INSERT INTO comentarios (nombre_usu,comentario) VALUES (?,?)");
        $result->bindParam(1, $data['nombre_usu'], PDO::PARAM_STR);
        $result->bindParam(2, $data['comentario'], PDO::PARAM_STR);
        return $result->execute();
    }catch (Exception $e){
       die("Location:?controller=index" . $e->getMessage());
    }
}
public function delete_register($data){
    try{
        $result = parent::connect()->prepare("DELETE FROM comentarios WHERE id = ?");
        $result->bindParam(1, $data['id'], PDO::PARAM_INT);
        return $result->execute();
    }catch (Exception $e){
        die("Error index->update_register() " . $e->getMessage());
    }
}
}