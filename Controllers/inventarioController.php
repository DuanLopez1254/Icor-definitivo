<?php

class inventarioController extends inventario{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/inventario/layouts/index.php';
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
            require_once 'views/inventario/layouts/vista.php';
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
        require_once 'views/inventario/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        echo parent::register($_POST) ? header('location: ?controller=inventario') : 'location: ?controller=inventario';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $inventario = parent::find($_GET['Id_inve']);
            require_once 'views/layouts/header.php';
            require_once 'views/inventario/header/edit.php';
            require_once 'views/inventario/layouts/formu.php';
            require_once 'views/inventario/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }
    }
    public function edits(){
        if($_SESSION['login']->Id_cargo == 1){
            $inventario = parent::find($_GET['Id_inve']);
            require_once 'views/layouts/header.php';
            require_once 'views/inventario/header/edits.php';
            require_once 'views/inventario/layouts/formu.php';
            require_once 'views/inventario/footer/termis.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }
    }
    public function editd(){
        if($_SESSION['login']->Id_cargo == 1){
            $inventario = parent::find($_GET['Id_inve']);
            require_once 'views/layouts/header.php';
            require_once 'views/inventario/header/editd.php';
            require_once 'views/inventario/layouts/formu.php';
            require_once 'views/inventario/footer/termid.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }
    }

    //Validaciones e interaccion model
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=inventario') : 'Error ';
    }
    public function updates(){
        echo parent::update_registers($_POST) ? header('location:?controller=inventario&method=vista') : 'Error ';
    }
    public function updated(){
        echo parent::update_registers($_POST) ? header('location:?controller=inventario') : 'Error ';
    }


    //
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=inventario') : 'Error al borrar la publicacion';

    }

}