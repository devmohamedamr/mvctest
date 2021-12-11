<?php
namespace Itrax\Mvc\controllers;

use Itrax\Mvc\models\user;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\session2;
use Itrax\Mvc\core\controller;
use Itrax\Mvc\core\validation;
use Itrax\Mvc\core\saas\contract\Ihost;



class auth extends controller
{
 
    public function login()
    {        
        // print_r(session2::all());die;
        // echo session2::has("auth");die;/
        return $this->view("admin/login",["title"=>"mohamed"]);
    }


    public function postlogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new user;
        $res =  $user->getUserByemailAndPassword($email,$password);
       
        if(!empty($res)){
            
            $session_res =  session2::set("auth",$res);
            // print_r($session_res);die;
            redirect("../admin/index");
        }else{
            redirect("login");
        }
    }



}