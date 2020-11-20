<?php
class usuario extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM `registro` WHERE id_esta = 1");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM `registro` WHERE id_esta = 2");
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
            $result->bindParam(3, $data['celular'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_doc'], PDO::PARAM_STR);
            $result->bindParam(5, $data['documento'], PDO::PARAM_STR);
            $result->bindParam(6, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(7, $data['contrasena'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error index->register() " . $e->getMessage());
        }
    }
    public function find($id_regis){
        try{
            $result = parent::connect()->prepare("SELECT * FROM registro WHERE id_regis = ?");
            $result->bindParam(1, $id_regis, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE registro SET Nombre = ?, Cantidad = ?, Ubicacion = ?, Id_pro = ? WHERE id_regis = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_pro'], PDO::PARAM_INT);
            $result->bindParam(5, $data['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=producto" . $e->getMessage());
        }
    }
    public function updates_register($datas){
        try{
            $result = parent::connect()->prepare("UPDATE registro SET id_esta = ? WHERE id_regis = ?");
            $result->bindParam(1, $datas['id_esta'], PDO::PARAM_STR);
            $result->bindParam(2, $datas['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("location:?controller=usuario " . $e->getMessage());
        }
    }
}