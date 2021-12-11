<?php
namespace Itrax\Mvc\core\saas;


class saas_helper{

    public static function handle_hosts($username){
         file_put_contents("C:\Windows\System32\drivers\\etc\hosts","  127.0.0.1     $username.vcard.test",FILE_APPEND | LOCK_EX);
    }

    public static function generate_database($username){
        // echo ;die;
        // $sql =  str_replace("{{username}}",$username,$content);

        $create_database = "CREATE DATABASE `$username`";
        $link =  mysqli_connect("localhost","root","");
        mysqli_query($link, $create_database);
        static::run_sql($username);
    }

    public static function run_sql($username){
        $content =  file_get_contents(dirname(__FILE__)."\database\user_vcard.sql");
        $database =  mysqli_connect("localhost","root","",$username);
        // print_r($database);die;
        mysqli_multi_query($database, $content);
    }

    public static function saasController(){
        $is_saas =  (new saas)->isSubDomain();
        return  $is_saas ? 'vcard' : 'home';
    }

}