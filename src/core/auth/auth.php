<?php
namespace Itrax\Mvc\core\auth;
use Itrax\Mvc\core\Session2;


trait auth{

    public function check(){
        
        if(session2::has("auth") == false){
            exit("this methods not allow");
        }

    }

}