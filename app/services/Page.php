<?php

namespace App\services;

class Page
{
    public static function part(string $part_name): void
    {
        require_once 'views/components/' . $part_name . '.php';
    }
}