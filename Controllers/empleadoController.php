<?php
class empleadoController extends empleado{
    public function __construct()
    {
        Security::verifyUser();
    }
    public function index(){ 
        if($_SESSION['login']->Id_cargo == 1){
            require_once 'views/layouts/header.php';
            require_once 'views/empleado/layouts/index.php';
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
            require_once 'views/empleado/layouts/vista.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function perfil(){
        require_once 'views/layouts/header.php';
        require_once 'views/empleado/layouts/perfil.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        $url_path = 'assets/registro/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location:?controller=empleado') : 'Error en el registro';
        
    }

    public function edit(){
        if($_SESSION['login']->Id_cargo == 1){
            $empleado = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/empleado/header/edit.php';
            require_once 'views/empleado/layouts/formu.php';
            require_once 'views/empleado/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function edi(){
        if($_SESSION['login']->Id_cargo == 1){
            $empleado = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/empleado/header/edi.php';
            require_once 'views/empleado/layouts/formu.php';
            require_once 'views/empleado/footer/termi.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function edits(){
        if($_SESSION['login']->Id_cargo == 1){
            $empleado = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/empleado/header/edits.php';
            require_once 'views/empleado/layouts/formu.php';
            require_once 'views/empleado/footer/termis.php';       
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function editd(){
        if($_SESSION['login']->Id_cargo == 1){
            $empleado = parent::find($_GET['id_regis']);
            require_once 'views/layouts/header.php';
            require_once 'views/empleado/header/editd.php';
            require_once 'views/empleado/layouts/formu.php';
            require_once 'views/empleado/footer/termid.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function PDF(){         
        if($_SESSION['login']->Id_cargo == 1){
            header('Location: views/pdf/Empleado/Activos/EmpleadosPDF.php');  
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }
    public function PDFS(){         
        if($_SESSION['login']->Id_cargo == 1){
            header('Location: views/pdf/Empleado/Inactivos/EmpleadosPDF.php');  
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }     }
}

