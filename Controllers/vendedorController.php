<?php

class vendedorController extends vendedor{

    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct(){

    }

    /**
     * Vista principal de los controladores.
     * Principalmente casi siempre se retorna una vista con una tabla para mostrar todos los registros. (Esto depende de la necesidad del cliente)
     */
    public function index(){
        if($_SESSION['login']->Id_cargo == 2){
            require_once 'views/layouts/header.php';
            require_once 'views/factura/index.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        } 
    }

    public function fac(){                
        if($_SESSION['login']->Id_cargo == 2){
            require_once 'views/layouts/header.php';
            require_once 'views/factura/create.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }
    }
    public function regis(){                
        require_once 'views/layouts/header.php';
        require_once 'views/factura/regis.php';
        require_once 'views/layouts/footer.php';
    }
    public function PDF(){         
        if(isset($_POST['datfac'])){  
           $conexion=mysqli_connect('localhost','root','','icor');
           $fac=$_POST['fac'];;
            $sql_update = mysqli_query($conexion, "UPDATE cod_fac SET Cod='$fac'");
          if($sql_update){
          header('Location: views/pdf/Facturas/PDF.php');  
        }
     }
    }

    public function Agre(){                
        if($_SESSION['login']->Id_cargo == 2){
            require_once 'views/layouts/header.php';
            require_once 'views/factura/agregar.php';
            require_once 'views/layouts/footer.php';
        }else  {
            require_once 'views/layouts/header.php';
            require_once 'views/Error404/index.php';
            require_once 'views/layouts/footer.php';
        }
    }


    /**
     * Esta función retorna una vista con un formulario.
     */
    public function create(){
        echo 'function create';
    }

    /**
     * Esta función se encarga de validar y almacenar en la base de datos la informacion enviada desde un formulario.
     */
    public function store(){
        echo parent::registers($_POST) ? header('location: ?controller=index#coment') : 'Error en el comentario';
    }
    public function stores(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index##exampleModalCenter') : 'Error en el registro';
    }

    /**
     * Esta función retorna una vista con un formulario con valores definidos de un registro especifico.
     */
    public function edit(){

    }

    /**
     * Esta función se encarga de validar y actualizar en la base de datos la información de un registro especifico.
     */
    public function update(){

    }

    /**
     * Esta funcion se encarga de borrar un registro especifico en la base de datos.
     */
    public function delete(){
        echo parent::delete_register($_GET) ? header('location: ?controller=index#coment') : 'Error al borrar la publicacion';

    }
    public function finalizar(){
        unset($_SESSION['Codigo_fac']);
        header('location:?controller=vendedor');
    }
    public function nada(){
        
            $conexion = mysqli_connect ('Localhost','root','','icor');
            $eliminar=$_SESSION['Codigo_fac'];
            $_DELETE_SQL =  "DELETE FROM factura WHERE fac = '$eliminar'";
            
            mysqli_query($conexion,$_DELETE_SQL); 

            unset($_SESSION['Codigo_fac']);
            
            header('Location: ?controller=vendedor'); 
        
    }
    public function login(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }
    public function eliminar(){
        if(isset($_POST['elimi']))
{  
$conexion = mysqli_connect ('Localhost','root','','icor');
$eliminar=$_POST['eli'];


$_DELETE_SQL =  "DELETE FROM productos_fac WHERE id_pfac = '$eliminar'";

mysqli_query($conexion,$_DELETE_SQL); 

header('Location: ?controller=vendedor&method=Fac'); 

}

    }
}