<?php

include '../Server.php';

//capturamos los datos enviados por formularios

$usuario = $_POST['usuario'];//crea variable global y la pasa a la variable $usuario

$contrasenia = $_POST['contrasenia'];


$objetoServer = new Server();//Se crea un objeto

$objetoServer->login($usuario, $contrasenia);//objeto server llama al metodo login y se lo pasas, recibe 2 parametro













