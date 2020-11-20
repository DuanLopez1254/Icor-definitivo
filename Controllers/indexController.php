<?php
class indexController extends index{
    public function __construct(){
    }
    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/index/forms.php';
        require_once 'views/layouts/footer.php';
    }
    public function contactanos(){                
        require_once 'views/layouts/header.php';
        require_once 'views/contactanos/layouts/contactanos.php';
        require_once 'views/layouts/footer.php';
    }
    public function create(){
        echo 'function create';
    }
    public function store(){
        echo parent::registers($_POST) ? header('location: ?controller=index#coment') : 'Error en el comentario';
    }
    public function stores(){
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index##exampleModalCenter') : 'Error en el registro';
    }
    public function stores1(){
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=vendedor') : 'Error en el registro';
    }
    public function login(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }

}