<?php
namespace Itrax\Mvc\core;

use Itrax\Mvc\core\auth\auth;

class controller
{
    use auth;
    public function view($path,$data){
        extract($data);
        include dirname(__DIR__)."/views/{$path}.php";
    }
}