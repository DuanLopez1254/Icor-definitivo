<?php
//Herencia
class index extends Database{

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

    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM sedes where id_esta = 1 ");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO registro (nombre,apellidos,celular,Id_doc,documento,correo,contrasena) VALUES (?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Id_doc'], PDO::PARAM_INT);
            $result->bindParam(5, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(6, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(7, $data['contrasena'], PDO::PARAM_STR);
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