<?php
namespace Itrax\Mvc\controllers;

use Itrax\Mvc\models\user;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\session2;
use Itrax\Mvc\core\controller;
use Itrax\Mvc\core\validation;
use Itrax\Mvc\core\saas\contract\Ihost;



class admin  extends controller implements Ihost
{
    public function __construct()
    {
        $this->check();
    
    }
    public function index()
    {    $user = new user;
         $data =  $user->getUserData(1);   
        return $this->view("admin/home",["title"=>"mohamed",'data'=>$data]);
    }

    public function edit(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $title = $_POST['title'];
        $phone = $_POST['phone'];
        $whatsapp = $_POST['whatsapp'];

        $id = 1;
        $user = new user;
        $user->edit([
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'title' => $title,
            'phone' => $phone,
            'whatsapp' => $whatsapp
        ],$id);

        redirect("index");
    }

}