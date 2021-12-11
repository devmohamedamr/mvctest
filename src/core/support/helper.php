<?php

if (!function_exists('base_path')) {
    function base_path(){
        return realpath(dirname(__DIR__)."/../../");
    }
}




if (!function_exists('ds')) {
    function ds(){
        return DIRECTORY_SEPARATOR;
    }
}




if (!function_exists('host_path')) {

    function host_path(){
        return $_SERVER['HTTP_HOST'];
    }
}




if (!function_exists('redirect')) {

    function redirect($path){
        header("location: {$path}");
    }
}





if (!function_exists('assets')) {
    /**
     * assets
     * 
     * @return string
     */
    function assets($path = ''){
        $path_value = $_SERVER['REQUEST_SCHEME'] . '://'.host_path();
        if(!empty($path)){
            foreach(explode('/',$path) as $p){
                $path_value .= rtrim(DIRECTORY_SEPARATOR. $p . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR);
            }
            return $path_value;
        }
        throw new \InvalidArgumentException('not path ' .$path . 'exists');
        
    }
}
