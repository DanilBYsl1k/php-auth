<?php

use App\services\Router;
use App\controllers\Auth;

Router::page('/', 'Home');
Router::page('/login', 'login');
Router::page('/register', 'register');
//я тут 
Router::post('/auth/register', Auth::class, 'register', true, true);

Router::enable();