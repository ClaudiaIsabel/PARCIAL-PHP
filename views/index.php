<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php
                const TITLE = "Login";
                echo TITLE;
            ?></title>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once '../templates/header.php'; ?>


        <h1 style="text-align: center; margin-top: 40px;">Formulario</h1>
        <div class="login">

            <form action="server_login.php" method="post"><!--redirige a la pagina server_login y 
                                                          crea campos de entrada -->

                <div><input type="text" name="usuario" autofocus placeholder="Ingresa tu usuario"></div> 

                <div><input type="password" name="contrasenia" placeholder="Contraseña"></div>

                <div><input class="submit" type="submit" value="Iniciar Sesion"></div>

            </form>
            
            

        </div>

        <?php require_once '../templates/footer.php'; ?>
    </body>
</html>
