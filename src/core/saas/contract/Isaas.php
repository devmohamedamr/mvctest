<?php
namespace Itrax\Mvc\core\saas\contract;




interface Isaas
{
    public function run($subdomain);

    public function setSubdomain($subdomain);

    public function getSubdomain($subdomain);

}