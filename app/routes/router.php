<?php
abstract class RouteSwitch{
    public function home(){
        require_once '../main.php';
    }
    public function ordensdeproducao(){
        require_once '../views/ordensdeproducao.php';
    }
    public function gestaodeusuarios(){
        require_once '../views/gestaoDeUsuarios.php';
    }
       
   // public function __call($name, $arguments)
   // {
        //http_response_code(404);
        //require '/pages/not-found.php';
   // }
}
class Router extends RouteSwitch
{   
    public $route;
    
    public function run(string $requestUri){
        $route = substr($requestUri, 1);

        if ($route == '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}
?>