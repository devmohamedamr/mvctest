<?php
namespace Itrax\Mvc\controllers;

use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\saas\saas;
use Itrax\Mvc\core\controller;
use Itrax\Mvc\core\saas\saas_helper;


class create extends controller
{
    public function index(){
        $title = "sign up";
        return $this->view("create/signup",['title'=> $title]);
    }
    public function store(){
        
        registry::get("validation")->input("username")->min(2)->max(10)->required();
        registry::get("validation")->input("password")->min(5)->max(20)->required();
        registry::get("validation")->input("email")->email()->required();

        if(registry::get("validation")->success()){
            // saas step
            saas_helper::handle_hosts($_POST['username']);
            saas_helper::generate_database($_POST['username']);

            // database insert main
            registry::get("main")->insert("users",[
                "subdomian"=> $_POST['username'].".vcard.test",
                "database_user" => $_POST['username']
            ])->excute();

            // queue 
            sleep(1);
            // insert user saas db
            if(registry::get("main")->select("users","*")->where("database_user","=",$_POST['username'])->getRow()){
                
                $saas = new saas;
                $saas->setSubdomain($_POST['username']);

                registry::get("user_card_connection")->insert("user",[
                    "name" => $_POST['username'],
                    "email" => $_POST['email'],
                    "password" => $_POST['password']
                ])->excute();
            }else{
                echo "database not exist";
            }
      


        }else{
            registry::get("validation")->showErorr();
        }


    }
}