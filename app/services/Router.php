<?php

namespace App\services;

class Router
{
    private static array $list = [];

    public static function page(string $uri, string $page_name): void
    {
        self::$list[] = [
            "uri"  => "$uri",
            "page" => "$page_name"
        ];
    }

    public static function post(string $uri, $class, string $method, $form_data = false, $files = false)
    {
        self::$list[] = [
           "uri"      => $uri,
           "class"    => $class,
           "method"   => $method,
           "post"     => true,
           "formdata" => $form_data,
           "files"    => $files
        ];
    }

    public static function get(string $uri, $class, string $method) {

    }

    public static function enable(): void
    {
        $query = '/'.$_GET['url'];

        foreach (self::$list as $route) {
            if ($route['uri'] === $query ) {
                if(isset($route['post']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                    $action = new $route['class'];
                    $method = $route['method'];

                    if ($route['formdata'] && $route['files']) {
                        $action->$method($_POST, $_FILES);
                    }elseif ($route['formdata'] && !$route['files']) {
                        $action->$method($_POST);
                    }else {
                        $action->$method();
                    }
                    die();
                } else {
                    require_once 'views/pages/' . $route['page']. '.php' ;
                    die();
                }
            }
        }
        self::error();
    }

    public static function error(): void
    {
        require_once 'views/pages/error.php';
    }

    public static function redirect($uri) {
        header('Location:'. $uri);
        die();
    }
}