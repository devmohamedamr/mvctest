<?php
namespace Itrax\Mvc\controllers;

use Itrax\Mvc\core\controller;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\validation;



class home extends controller
{
    public function index()
    {
      $data = registry::get("db")->select("category","*")->getAll();

      print_r($data);
        return $this->view("index",["title"=>"mohamed"]);
    }


    public function store(){

        registry::get("validation")->input("username")->email()->required();

        print_r(registry::get("validation")->showErorr());
    }
}