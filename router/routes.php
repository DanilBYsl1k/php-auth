<?php

use App\services\Router;
use App\controllers\Auth;

Router::page('/', 'Home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');

Router::post('/auth/register', Auth::class, 'register', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::get('/auth/logout', Auth::class, 'logout');

Router::enable();