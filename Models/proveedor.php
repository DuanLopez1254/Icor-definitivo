<?php
//Herencia
class proveedor extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM registro where id_esta = 1 and Id_cargo = 5");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM registro where id_esta= 2 and Id_cargo = 5");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO registro (nombre,direccion,Id_cargo,celular,fecha_in,imagen,contrasena) VALUES (?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Id_cargo'], PDO::PARAM_STR);
            $result->bindParam(4, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(5, $data['fecha_in'], PDO::PARAM_STR);
            $result->bindParam(6, $data['imagen'], PDO::PARAM_STR);
            $result->bindParam(7, $data['contrasena'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Location:?controller=proveedor" . $e->getMessage());
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
            $result = parent::connect()->prepare("UPDATE registro SET nombre = ?, direccion = ?, celular = ?, fecha_in = ?, fecha_li= ?, observacion = ? WHERE id_regis = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(4, $data['fecha_in'], PDO::PARAM_STR);
            $result->bindParam(5, $data['fecha_li'], PDO::PARAM_STR);
            $result->bindParam(6, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(7, $data['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=proveedor" . $e->getMessage());
        }
    }
    public function update_registers($data){
        try{
            $result = parent::connect()->prepare("UPDATE registro SET nombre = ?, direccion = ?, celular = ? , fecha_li =?, observacion = ? , id_esta= ? WHERE id_regis = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(4, $data['fecha_li'], PDO::PARAM_STR);
            $result->bindParam(5, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id_esta'], PDO::PARAM_INT);
            $result->bindParam(7, $data['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=proveedor" . $e->getMessage());
        }
    }
  //  public function delete_register($data){
    //    try{
      //      $result = parent::connect()->prepare("DELETE FROM provedor WHERE Id_pro = ?");
        //    $result->bindParam(1, $data['Id_pro'], PDO::PARAM_INT);
          //  return $result->execute();
      //  }catch (Exception $e){
       //     die("location:?controller=proveedor " . $e->getMessage());
        //}
   // }
}

