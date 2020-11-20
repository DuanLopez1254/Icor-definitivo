<?php
class empleado extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM registro where id_esta = 1 and Id_cargo = 3 OR Id_cargo = 2");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function alls(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM registro where id_esta = 2 and Id_cargo = 3 OR Id_cargo = 2");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO registro (nombre,apellidos,celular,Id_cargo,Id_doc,documento,correo,fecha_in,imagen,contrasena) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Id_cargo'], PDO::PARAM_STR);
            $result->bindParam(5, $data['Id_doc'], PDO::PARAM_STR);
            $result->bindParam(6, $data['documento'], PDO::PARAM_STR);
            $result->bindParam(7, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(8, $data['fecha_in'], PDO::PARAM_STR);
            $result->bindParam(9, $data['imagen'], PDO::PARAM_STR);
            $result->bindParam(10, $data['contrasena'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Location:?controller=empleado" . $e->getMessage());
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
            $result = parent::connect()->prepare("UPDATE registro SET nombre = ?, apellidos = ?, celular = ?, Id_cargo = ?, Id_doc = ?, documento = ?, correo = ?, observacion = ?, fecha_in = ?, fecha_li = ? WHERE id_regis = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Id_cargo'], PDO::PARAM_INT);
            $result->bindParam(5, $data['Id_doc'], PDO::PARAM_INT);
            $result->bindParam(6, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(7, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(8, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(9, $data['fecha_in'], PDO::PARAM_STR);
            $result->bindParam(10, $data['fecha_li'], PDO::PARAM_STR);
            $result->bindParam(11, $data['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=empleado " . $e->getMessage());
        }
    }
    public function update_registers($data){
        try{
            $result = parent::connect()->prepare("UPDATE registro SET nombre = ?, apellidos = ?, celular = ?, Id_cargo = ?, Id_doc = ?, documento = ?, correo = ?, observacion = ?, fecha_li = ?, id_esta = ? WHERE id_regis = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(3, $data['celular'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Id_cargo'], PDO::PARAM_INT);
            $result->bindParam(5, $data['Id_doc'], PDO::PARAM_INT);
            $result->bindParam(6, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(7, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(8, $data['observacion'], PDO::PARAM_STR);
            $result->bindParam(9, $data['fecha_li'], PDO::PARAM_STR);
            $result->bindParam(10, $data['id_esta'], PDO::PARAM_STR);
            $result->bindParam(11, $data['id_regis'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=empleado " . $e->getMessage());
        }
    }
}