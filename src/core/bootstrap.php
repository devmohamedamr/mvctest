<?php
namespace Itrax\Mvc\core;

use Itrax\Mvc\core\saas\saas;
use Itrax\Mvc\core\saas\saas_helper;

class bootstrap
{
    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        $saas_controller =  saas_helper::saasController();

        $url = explode("/",$_SERVER['QUERY_STRING'],3);

        // controller
        $this->controller = (isset($url[0]) && !empty($url[0])) ? $url[0] : $saas_controller;

        // method
        $this->method = (isset($url[1]) && !empty($url[1])) ? $url[1] : "index";
        
        // params
        $this->params = (isset($url[2]) && !empty($url[2])) ? explode("/",$url[2]) : [];

    }

    private function render()
    {
        $controller = "Itrax\\Mvc\\controllers\\".$this->controller;
        if(class_exists($controller)){

            $controller = new $controller;

            if(method_exists( $controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }

        }

    }

    public function run(){
        // session2::start();
        // $session->kill();
    }

}