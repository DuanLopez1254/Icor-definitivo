<?php
class ventasController extends ventas{
    public function __construct()
    {
        Security::verifyUser();
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 2 OR 1){
            require_once 'views/layouts/header.php';
            require_once 'views/ventas/index.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/ventas/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        echo parent::register($_POST) ? header('location: ?controller=ventas') : 'location: ?controller=ventas';
    }
    public function edit(){
        $factura = parent::find($_GET['Id_factura']);
        require_once 'views/layouts/header.php';
        require_once 'views/ventas/edit.php';
        require_once 'views/layouts/footer.php';
    }
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=ventas') : 'Error ';
    }
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=ventas') : 'Error al borrar la factura';

    }
}