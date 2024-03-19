<?php

namespace App\controllers;

use App\services\Router;

class Auth
{
    public function register($data, $files): void
    {
        [
            'email'      => $email,
            'username'   => $username,
            'full_name'  => $full_name,
            'password'   => $password,
            'password-confirm' => $confirm_password
        ] = $data;

        if ($password !== $confirm_password) {
            Router::error();
            die();
        }

        $avatar = $files['avatar'];
        $filename =  str_replace(array(' ', '#'), array('_', '_'), $avatar['name']);
        $path = "uploads/avatars/" . $filename;

        if (move_uploaded_file($avatar["tmp_name"], $path)) {
          $user = \R::dispense('users');

            $user->__set('email', $email);
            $user->__set('username', $username);
            $user->__set('full_name' ,$full_name);
            $user->__set('group' , 1);
            $user->__set('avatar', '/'.$path);
            $user->__set('password', password_hash($password, PASSWORD_DEFAULT));

            \R::store($user);
            Router::redirect('/login');

        }else {
            Router::error();
        }
    }

    public function login($data): void {
        ['email' => $email, 'password' => $password] = $data;

        $user = \R::findOne('users', 'email = ?', [$email] );

        if (!$user) {
            Router::error();
        }

        if(password_verify($password, $user->password)) {
            session_start();
            $_SESSION["user"] = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "username" => $user->username,
                "avatar" => $user->avatar,
                "group" => $user->group,
                "email" => $user->email,
            ];

            Router::redirect('/profile');
        }else {
            die('user not found');
        }
    }

    public function logout() {
         unset($_SESSION['user']);

         Router::redirect('/');
    }
}