<?php

class indexController extends index{

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
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index##exampleModalCenter') : 'Error en el registro';
    }
    public function stores1(){
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=vendedor') : 'Error en el registro';
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
    public function login(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }

}