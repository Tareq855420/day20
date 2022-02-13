<?php


namespace App\Classes;


class HOME
{
    public function index()
    {
        header('Location: action.php?pages=home');
    }
}