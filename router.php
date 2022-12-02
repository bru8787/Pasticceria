<?php   

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
    "/"=>"controller/home.php",
    "/contatti"=>"controller/contatti.php",
    "/sudinoi"=>"controller/sudinoi.php",
    "/dolci"=>"controller/dolci.php",
    "/salati"=>"controller/salati.php",
];
function abort($code=404){
    http_response_code($code);
    require "404.php";
}



function route($uri,$route){
    if(array_key_exists($uri,$route)){

        require $route[$uri];

    }else{abort();}

}
route($uri,$route);


?>

