<?php

session_start();

include 'MainService.php'; //se incluye la clase abstracta 
include 'UserService.php';

class Server extends MainService {

    private $userService; //referencia a un objeto

    //Constructor

    function __construct() {
        $this->userService = new UserService(); // creacion del objeto userName
    }

    //Metodo login, recibe dos parametros
    public function login($username, $password) {


        $estado = $this->userService->validar($username, $password);

        if ($estado) {

            $_SESSION['usuario'] = $username;

            header("Location: TodoList.php");

            exit;
        } else {
            echo 'Error: El usuario no existe';
        }
    }

    protected function error() {
        
    }

    protected function message() {
        
    }

}
