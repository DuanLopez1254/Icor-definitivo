<?php

class comenController extends comen{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
    

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/admin/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        echo parent::registers($_POST) ? header('location: ?controller=index') : 'Error en el registro';
    }
    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $comen = parent::find($_GET['id_co']);
            require_once 'views/layouts/header.php';
            require_once 'views/comen/edit.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    //Validaciones e interaccion model
    public function update( ){
        echo parent::update_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
    }

    public function updates( ){
        echo parent::updates_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
    }

    //
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';

    }

}