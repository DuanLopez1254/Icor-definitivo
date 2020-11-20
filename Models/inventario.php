<?php
class inventario extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM inventario where id_esta =1");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM inventario where id_esta =2");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO inventario (Nombre,Cantidad,Fecha,Ubicacion,observacion) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Location:?controller=inventario" . $e->getMessage());
        }
    }
    public function find($Id_inve){
        try{
            $result = parent::connect()->prepare("SELECT * FROM inventario WHERE Id_inve = ?");
            $result->bindParam(1, $Id_inve, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE inventario SET Nombre = ?, Cantidad = ?, Fecha = ?, Ubicacion = ?, observacion=? WHERE Id_inve = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['Id_inve'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=inventario" . $e->getMessage());
        }
    }
    public function update_registers($data){
        try{
            $result = parent::connect()->prepare("UPDATE inventario SET Nombre = ?, Cantidad = ?, Fecha = ?, Ubicacion = ?, observacion=?, id_esta =?  WHERE Id_inve = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Cantidad'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Ubicacion'], PDO::PARAM_STR);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id_esta'], PDO::PARAM_INT);
            $result->bindParam(7, $data['Id_inve'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=inventario" . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM inventario WHERE Id_inve = ?");
            $result->bindParam(1, $data['Id_inve'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=inventario " . $e->getMessage());
        }
    }
}