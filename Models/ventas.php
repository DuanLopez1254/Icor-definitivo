<?php
class ventas extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM factura");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO factura (Nombre_producto,cantidad_producto,Precio_producto,Id_producto,Fecha,Sub_total,Total,id_regis,nombre,documento) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['Nombre_producto'], PDO::PARAM_STR);
            $result->bindParam(2, $data['cantidad_producto'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Precio_producto'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Id_producto'], PDO::PARAM_INT);
            $result->bindParam(5, $data['Fecha'], PDO::PARAM_STR);
            $result->bindParam(6, $data['Sub_total'], PDO::PARAM_INT);
            $result->bindParam(7, $data['Total'], PDO::PARAM_INT);
            $result->bindParam(8, $data['id_regis'], PDO::PARAM_INT);
            $result->bindParam(9, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(10, $data['documento'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Location:?controller=ventas" . $e->getMessage());
        }
    }
    public function find($Id_factura){
        try{
            $result = parent::connect()->prepare("SELECT * FROM factura WHERE Id_factura = ?");
            $result->bindParam(1, $Id_factura, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE factura SET Nombre_producto = ?, cantidad_producto = ?, Precio_producto  = ?, Id_producto = ?, Fecha = ?, Sub_total = ?, Total = ?, id_regis = ?, nombre = ?, documento = ? WHERE Id_factura = ?");
            $result->bindParam(1, $data['Nombre_producto'], PDO::PARAM_STR);
            $result->bindParam(2, $data['cantidad_producto'], PDO::PARAM_INT);
            $result->bindParam(3, $data['Precio_producto'], PDO::PARAM_INT);
            $result->bindParam(4, $data['Id_producto'], PDO::PARAM_INT);
            $result->bindParam(5, $data['Fecha'], PDO::PARAM_STR);
            $result->bindParam(6, $data['Sub_total'], PDO::PARAM_INT);
            $result->bindParam(7, $data['Total'], PDO::PARAM_INT);
            $result->bindParam(8, $data['Id_empleado'], PDO::PARAM_STR);
            $result->bindParam(9, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(10, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(11, $data['Id_factura'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=ventas" . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM factura WHERE Id_factura = ?");
            $result->bindParam(1, $data['Id_factura'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("location:?controller=ventas" . $e->getMessage());
        }
    }
}