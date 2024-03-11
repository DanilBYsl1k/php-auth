<?php

namespace App\services;

use R;

class App
{
    public static function start(): void
    {
        self::libs();
        self::db();
    }

    public static function libs(): void
    {
        $config = require_once 'config/app.php';
        foreach ($config['libs'] as $item) {
            require_once "libs/" . $item . '.php';
        }
    }

    public static function db(): void
    {
        $config = require_once 'config/db.php';

        if ($config["enable"]) {
            R::setup( 'mysql:host='.$config['host'].';port='.$config['port'].';dbname=' . $config['db_name'],
                $config['user'], $config['password'] );

            if (!R::testConnection()) {
                die('error database connect');
            }
        }
    }
}