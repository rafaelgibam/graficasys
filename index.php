<?php

require_once "Layouts/head.php";
require_once "Layouts/menu.php";

if(isset($_GET) && !empty($_GET)){
    foreach ($_GET as $key => $pagina) {
        if(file_exists("Pages/{$key}.php")){
            require_once "Pages/{$key}.php";
        }
    }
}else{
    require_once "Pages/principal.php";
}

require_once "Layouts/footer.php"?>
