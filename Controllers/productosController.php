<?php
class productosController extends productos{
    public function __construct()
    {
        Security::verifyUser();
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/productos/layouts/index.php';
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
            require_once 'views/productos/layouts/vista.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function store(){
        $url_path = 'assets/images'. $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        echo parent::register($_POST) ? header('location:?controller=productos') : 'Error en el registro';
    }
    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $producto = parent::find($_GET['Id_prod']);
            require_once 'views/layouts/header.php';
            require_once 'views/productos/header/edit.php';
            require_once 'views/productos/layouts/formu.php';
            require_once 'views/productos/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function edits(){
        if($_SESSION['login']->Id_cargo == 1){
            $producto = parent::find($_GET['Id_prod']);
            require_once 'views/layouts/header.php';
            require_once 'views/productos/header/edits.php';
            require_once 'views/productos/layouts/formu.php';
            require_once 'views/productos//footer/termis.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function editd(){
        if($_SESSION['login']->Id_cargo == 1){
            $producto = parent::find($_GET['Id_prod']);
            require_once 'views/layouts/header.php';
            require_once 'views/productos/header/editd.php';
            require_once 'views/productos/layouts/formu.php';
            require_once 'views/productos/footer/termid.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=productos') : 'Error ';
    }
    public function updates(){
        echo parent::update_registers($_POST) ? header('location:?controller=productos') : 'Error ';
    }

    public function updated(){
        echo parent::update_registers($_POST) ? header('location:?controller=productos&method=vista') : 'Error ';
    }
}