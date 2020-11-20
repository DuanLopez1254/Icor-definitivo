<?php
class securityController extends Security {
    public function login(){
        $login = parent::validateLogin($_POST['correo']);
        if(!is_object($login)) {
        $_SESSION['error'] = "Los datos ingresados son incorrectos";
        return header ('location:?controller=index');
        }
       if(password_verify($_POST['contrasena'], $login->contrasena)){
           $_SESSION['login'] = $login;
           if($_SESSION['login']->Id_cargo == 1){
               return header('Location:?controller=admin');
           }else if($_SESSION['login']->Id_cargo == 2) {
               return header('location:?controller=vendedor');
           }else if($_SESSION['login']->Id_cargo == 3) {
                return header('location:?controller=empleado&method=perfil');
            }elseif ($_SESSION['login']->Id_cargo == 4){
                return header('location:?controller=cliente');
            }
       }else{
       $_SESSION['error'] = "Los datos ingresados son incorrectos";
       return header ('location:?controller=index');
       }
    } 
    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['Codigo_fac']);
        session_destroy();
        header('location:?controller=index');
    }
}