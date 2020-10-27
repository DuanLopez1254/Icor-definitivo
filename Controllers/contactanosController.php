<?php

class contactanosController extends contactanos{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
    
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/contactanos/layouts/index.php';
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
            require_once 'views/contactanos/layouts/vista.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }


    //'Validaciones e interaccion model
    public function store(){
        $url_path = 'assets/Sede/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        echo parent::register($_POST) ? header('location:?controller=contactanos') : 'Error en el registro';
        
    }
    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $contactanos = parent::find($_GET['Id_sede']);
            require_once 'views/layouts/header.php';
            require_once 'views/contactanos/header/edit.php';
            require_once 'views/contactanos/layouts/formu.php';
            require_once 'views/contactanos/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    public function edits(){
        if($_SESSION['login']->Id_cargo == 1){
            $contactanos = parent::find($_GET['Id_sede']);
            require_once 'views/layouts/header.php';
            require_once 'views/contactanos/header/edits.php';
            require_once 'views/contactanos/layouts/formu.php';
            require_once 'views/contactanos/footer/termis.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
        
    }

    public function editd(){
        if($_SESSION['login']->Id_cargo == 1){
            $contactanos = parent::find($_GET['Id_sede']);
            require_once 'views/layouts/header.php';
            require_once 'views/contactanos/header/editd.php';
            require_once 'views/contactanos/layouts/formu.php';
            require_once 'views/contactanos/footer/termid.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    //Validaciones e interaccion model
    public function update( ){
        echo parent::update_register($_POST) ? header('location: ?controller=contactanos') : 'location: ?controller=contactanos';
    }

    public function updates( ){
        echo parent::updates_register($_POST) ? header('location: ?controller=contactanos&method=vista') : 'location: ?controller=contactanos&method=vista';
    }

    //
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=admin') : 'Error al borrar la publicacion';

    }

}