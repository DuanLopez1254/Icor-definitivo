<?php

class usuarioController extends usuario{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/usuario/index.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    public function vista(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/usuario/vista.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function factura(){
        if($_SESSION['login']->Id_cargo == 4){
            require_once 'views/layouts/header.php';
            require_once 'views/cliente/factura.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    //'Validaciones e interaccion model
    public function store(){
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=usuario') : 'location: ?controller=usuario';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $usuario = parent::find($_GET['id_regis']);
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=usuario') : 'Error ';
    }
    public function updates( ){
        echo parent::updates_register($_POST) ? header('location:?controller=usuario') : 'location: ?controller=admin';
    }

    public function updated( ){
        echo parent::updates_register($_POST) ? header('location: ?controller=usuario&method=vista') : 'location: ?controller=admin';
    }

    //
   // public function delete(){
     //   echo parent::delete_register($_GET) ? header('location: ?controller=usuario') : 'Error al borrar la publicacion';
//
  //  }

}