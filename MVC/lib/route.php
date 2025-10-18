<?php
namespace lib;

class Route{
    private static $routes = [];
    public static $URL_BASE = "/MVC/public"; // RUTA DESDE EL LOCALHOST
    public static function get($uri,$callback){
        self::$routes["GET"][self::$URL_BASE.$uri] = $callback;
    }

    public static function post($uri,$callback){
        self::$routes["POST"][self::$URL_BASE.$uri] = $callback;
    }

    public static function dispatch(){
        $uri = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$routes[$method] as $url=>$funcion){
            if(strpos($url, ":")!==false){
                $url = preg_replace("#:[a-zA-Z]+#","([a-zA-Z]+)",$url);
            }

            if(preg_match("#^$url$#",$uri, $matches)){
                $params = array_slice($matches,1);
                
                if(is_callable($funcion)){
                    $content = $funcion(...$params);
                }
                if(is_array($funcion)){
                    $controlador = new $funcion[0];
                    $content = $controlador->{$funcion[1]}(...$params);
                }

                if(is_array($content) || is_object($content)){
                    header("Content-Type: application/json");
                    echo json_encode($content);
                }
                else{
                    echo $content;
                }
                return;
            }
        }
        echo "404";
    }
}
?>