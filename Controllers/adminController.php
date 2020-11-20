<?php
class adminController extends admin{
    public function __construct()
    {
        Security::verifyUser();
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/admin/index.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/admin/create.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        $nomimg=$_FILES['link']['name'];
        $num=date("GHs");
        $nombreimg=$num.$nomimg;
        $archivo=$_FILES['link']['tmp_name'];
        $ruta="assets";
        $ruta=$ruta."/".$nombreimg;       
        move_uploaded_file($archivo,$ruta);    
        $_POST['rutas'] =$ruta;
        $important=preg_replace('/\s+/', '', $_POST['title']); 
        $_POST['important'] =$important;
        echo parent::register($_POST) ? header('location: ?controller=admin') : 'Error en el registro';
    }

    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }
    public function update(){
        echo parent::update_register($_POST) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';
    }
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';

    }

}