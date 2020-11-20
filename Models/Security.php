<?php
class Security extends Database{
    public function validateLogin($correo){
        try{
            $result = parent::connect()->prepare("SELECT * FROM  registro WHERE correo = ?");
            $result->bindParam(1, $correo, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
    public static function verifyUser(){
        if(! isset($_SESSION['login'])) header('location:?controller=index');
    }
    public function verifyRole($role){
        if(! $role == $_SESSION['login']['Id_cargo']) header('location:?controller=index');
    }
}