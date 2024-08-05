<?php
    $url = !empty($_GET['url']) ? $_GET['url']: "home/home"; 
    echo $url;
    $arrUrl = explode("/",$url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if(empty($arrUrl[1])){
        if($arrUrl[1] != ""){
            $method = $arrUrl[1];
        }
    }
    echo "Controlador: "-$controller;
    echo "<br>";
    echo "Method: ".$method;

    print_r($arrUrl)
?>