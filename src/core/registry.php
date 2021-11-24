<?php
namespace Itrax\Mvc\core;



class registry
{
    
    private static $object = [];

    public static function set($key,$value){
        static::$object[$key] = $value;
    }

    public static function get($key){
        return static::$object[$key];
    }
}