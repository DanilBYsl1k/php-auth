<?php

use App\services\App;// подключение всяких либ и базы данних

require_once __DIR__ . "/vendor/autoload.php"; //для ауто лоада
App::start();
require_once __DIR__ . "/router/routes.php"; //для подключаем роутинг
