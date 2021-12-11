<?php
namespace Itrax\Mvc\core\saas;

use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\Database\db;
use Itrax\Mvc\core\saas\contract\Isaas;

class saas implements Isaas
{
    
    public function run($subdomain){
        if(count(explode(".",$subdomain)) > 2){
            $subdomain_database =  $this->getSubdomain($subdomain);
            $this->setSubdomain($subdomain_database);
        }
    } 
    public function getSubdomain($subdomain)
    {
        // echo $subdomain;die;
        $userinfo =  registry::get("main")->select("users","`database_user`")->where("subdomian","=","$subdomain")->getRow();
        if(!empty($userinfo)){
            return $userinfo['database_user'];
        }
        return false;
    }   

    public function setSubdomain($subdomain){
        // echo $subdomain;die;
        if(!empty($subdomain)){
            registry::set("user_card_connection",new db($subdomain));
        }
    }

    public function isSubDomain(){
        return (count(explode('.',$_SERVER['HTTP_HOST'])) > 2) ? true : false;
    }
}