<?php
namespace Itrax\Mvc\controllers;

use Itrax\Mvc\models\user;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\controller;
use Itrax\Mvc\core\validation;
use Itrax\Mvc\core\saas\contract\Ihost;



class vcard  extends controller implements Ihost
{
    public function index()
    {
           $user = new user;
         $profile =  $user->getUserData(1);   

        // echo assets("vcard");die;
        if(registry::has('user_card_connection')){
            $data = registry::get("user_card_connection")->select("user","*")->getRow();
        }

        return $this->view("vcard/index",["title"=>"mohamed",'color'=>$data['color'] , 'profile' => $profile]);
    }

}