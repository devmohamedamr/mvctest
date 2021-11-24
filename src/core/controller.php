<?php
namespace Itrax\Mvc\core;

class controller
{
    public function view($path,$data){
        extract($data);
        include dirname(__DIR__)."/views/{$path}.php";
    }
}