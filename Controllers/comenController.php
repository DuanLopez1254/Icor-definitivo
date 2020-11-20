<?php
class comenController extends comen{
    public function __construct()
    {
        Security::verifyUser();
    }
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/admin/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        echo parent::registers($_POST) ? header('location: ?controller=index') : 'Error en el registro';
    }
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
    public function update( ){
        echo parent::update_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
    }
    public function updates( ){
        echo parent::updates_register($_POST) ? header('location: ?controller=admin') : 'location: ?controller=admin';
    }
}