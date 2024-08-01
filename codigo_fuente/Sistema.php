<?php
    require_once ("Autoload.php");


    $objUsuario = new Usuario();

    // $isert = $objUsuario->insertUsuario("Hugo",54654845,"hugo@info.com","Ciudad Guatemala");
    // print_r($isert);

    //$usuario = $objUsuario->getUsuarios();

    $usuario = $objUsuario->getUsuario(3);
    print_r("<pre>");
    print_r($usuario);
    print_r("</pre>");

    // $update = $objUsuario->updateUsuario(2,"Hugo Hernandez",132465798, "mail@correo.com","calle falsa 123");

    // $usuario = $objUsuario->getUsuario(2);
    // print_r("<pre>");
    // print_r($usuario);
    // print_r("</pre>");

    $delete = $objUsuario->delUsuario(3);
    
    $usuarios = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($usuarios);
    print_r("</pre>");


?>