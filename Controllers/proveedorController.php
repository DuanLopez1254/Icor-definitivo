<?php

class proveedorController extends proveedor{
    //Mostrar toda la informacion
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
    public function index(){                
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/proveedor/layouts/index.php';
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
            require_once 'views/proveedor//layouts/vista.php';
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
        require_once 'views/proveedor/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $url_path = 'assets/provedor/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=proveedor') : 'location: ?controller=productos';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $proveedor = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/proveedor/header/edit.php';
            require_once 'views/proveedor/layouts/formu.php';
            require_once 'views/proveedor/footer/termid.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }   
    }
    public function edi(){
        if($_SESSION['login']->Id_cargo == 1){
            $proveedor = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/proveedor/header/edi.php';
            require_once 'views/proveedor/layouts/formu.php';
            require_once 'views/proveedor/footer/term.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }  
    }
    public function edits(){
        if($_SESSION['login']->Id_cargo == 1){
            $proveedor = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/proveedor/header/edits.php';
            require_once 'views/proveedor/layouts/formu.php';
            require_once 'views/proveedor/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function editd(){
        if($_SESSION['login']->Id_cargo == 1){
            $proveedor = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/proveedor/header/editd.php';
            require_once 'views/proveedor/layouts/formu.php';
            require_once 'views/proveedor/footer/termis.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }



    //Validaciones e interaccion model
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=proveedor') : 'Error ';
    }
    public function updat(){
        echo parent::update_register($_POST) ? header('location:?controller=proveedor&method=vista') : 'Error ';
    }
    public function updates(){
        echo parent::update_registers($_POST) ? header('location:?controller=proveedor&method=vista') : 'Error ';
    }
    public function updated(){
        echo parent::update_registers($_POST) ? header('location:?controller=proveedor') : 'Error ';
    }


    //
    //public function delete(){
      //  echo parent::delete_register($_GET) ? header('location: ?controller=proveedor') : 'Error al borrar la publicacion';

    //}

}