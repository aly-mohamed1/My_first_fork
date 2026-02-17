<?php

namespace App\Http\Controllers;

class Controller
{
    protected static string $response;
    public static function index()
    {
        // 
    }
    public static function show($id)
    {
        return "Show the id";
    }
    protected static function success($message)
    {
        return "You have succeded" ;
    }
    protected static function error($message)
    {
        // 
    }
}
