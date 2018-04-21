<?php

require_once "Layouts/head.php";
require_once "Layouts/menu.php";

$res = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if(isset($res)) {
    if ($res == "/") {
        require_once "Pages/principal.php";

    }else if (file_exists("Pages/{$res}.php")) {
        require_once "Pages/{$res}.php";
    }else if(file_exists("trataform/{$res}.php")){
        require_once "trataform/{$res}.php";
    }else{
        require_once "Pages/404.php";
    }

}

require_once "Layouts/footer.php";
