<?php
require_once realpath(dirname(__DIR__)."/vendor/autoload.php");
require_once realpath(dirname(__DIR__)."/src/core/Session.php");
use Itrax\Mvc\core\AppSessionHandler;
use Itrax\Mvc\core\bootstrap;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\Database\db;
use Itrax\Mvc\core\Database\dbpdo;
use Itrax\Mvc\core\saas\saas;
use Itrax\Mvc\core\saas\saas_helper;
use Itrax\Mvc\core\validation;


registry::set("main",new db("vacard"));


(new saas())->run($_SERVER['HTTP_HOST']);

registry::set("validation",new validation);


$bootstrap = new bootstrap;

$bootstrap->run();