<?php
class contactanos extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM sedes where id_esta = 1 ");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM sedes where id_esta = 2");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO sedes (Nombre,Direccion,Telefono,Ciudad,imagen) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Telefono'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Ciudad'], PDO::PARAM_STR);
            $result->bindParam(5, $data['imagen'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Location:?controller=contactanos" . $e->getMessage());
        }
    }
    public function find($Id_sede){
        try{
            $result = parent::connect()->prepare("SELECT * FROM sedes WHERE Id_sede = ?");
            $result->bindParam(1, $Id_sede, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE sedes SET Nombre = ?, Direccion = ?, Telefono = ?, Ciudad = ? WHERE Id_sede = ?");
            $result->bindParam(1, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Telefono'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Ciudad'], PDO::PARAM_STR);
            $result->bindParam(5, $data['Id_sede'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("location:?controller=contactanos " . $e->getMessage());
        }
    }
    public function updates_register($datas){
        try{
            $result = parent::connect()->prepare("UPDATE sedes SET Nombre = ?, Direccion = ?, Telefono = ?, Ciudad = ? , Observacion = ? , id_esta = ? WHERE Id_sede = ?");
            $result->bindParam(1, $datas['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $datas['Direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $datas['Telefono'], PDO::PARAM_INT);
            $result->bindParam(4, $datas['Ciudad'], PDO::PARAM_STR);
            $result->bindParam(5, $datas['Observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $datas['id_esta'], PDO::PARAM_INT);
            $result->bindParam(7, $datas['Id_sede'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("location:?controller=contactanos " . $e->getMessage());
        }
    }
    public function delete_register($data){
      try{
         $result = parent::connect()->prepare("DELETE FROM comentarios WHERE id_co = ?");
         $result->bindParam(1, $data['id_co'], PDO::PARAM_INT);
     return $result->execute();
      }catch (Exception $e){
      die("location:?controller=admin " . $e->getMessage());
       }
    }
}