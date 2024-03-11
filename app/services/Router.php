<?php

namespace App\services;

class Router
{
    private static array $list = [];

    /**
     *  метод создания роута в файле router/routes.php
     * @param $uri
     * @param $page_name
     * @return void
     */
    public static function page($uri, $page_name): void
    {
        self::$list[] = [
            "uri" => "$uri",
            "page" => "$page_name"
        ];
    }

    public static function post(string $link, $class, callable $fun)
    {
        self::$list[] = [
//            "uri" => "$uri",
//            "class" => "",
//            "page" => "$page_name"
        ];
    }

    /**
     *  метод отслеживания роута
     * @return void
     */
    public static function enable(): void
    {
        $query = '/'.$_GET['url'];

        foreach (self::$list as $route) {
            if ($route['uri'] === $query) {
                require_once 'views/pages/' . $route['page']. '.php' ;
                die();
            }
        }
        self::not_found_page();
    }

    private static function not_found_page(): void
    {
        require_once 'views/pages/error.php';
    }
}