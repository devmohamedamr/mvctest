<?php
namespace Itrax\Mvc\core;



class validation
{


    private $pattern = [

        'uri'           => '[A-Za-z0-9-\/_?&=]+',
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'alpha'         => '[\p{L}]+',
        'words'         => '[\p{L}\s]+',
        'alphanum'      => '[\p{L}0-9]+',
        'int'           => '[0-9]+',
        'float'         => '[0-9\.,]+',
        'tel'           => '[0-9+\s()-]+',
        'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'file'          => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+\.[A-Za-z0-9]{2,4}',
        'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
        'address'       => '[\p{L}0-9\s.,()°-]+',
        'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})'
    ];



    // error array 
    private $errors = [];


    private $input;



    private $value;


    public function input($input)
    {  
        if(!isset($_REQUEST[$input])){
            $this->errors[] = "input : $input  not exist";
        }else{
            $this->input = $input;
            
            $this->value();
        }
        return $this;
    }

    public function value(){
        $this->value = $_REQUEST[$this->input];
        return $this;
    }

    public function integer(){
        $regex = '/^('.$this->pattern['int'].')$/u';

        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : $this->input must be integer";
        }
        return $this;
    }

    public function max($max){
        if(strlen($this->value) > $max){
            $this->errors[] = "input : $this->input max must be $max";
        }
        return $this;
    }


    public function min($min){
        if(strlen($this->value) < $min){
            $this->errors[] = "input : $this->input min must be $min";
        }
        return $this;
    }


    public function required(){
        if(!(strlen($this->value) > 0 && !empty($this->value) && $this->value != '')){
            $this->errors[] = "input : $this->input must be required";
        }
        return $this;
    }


    public function email(){
        $regex = '/^('.$this->pattern['email'].')$/u';

        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : $this->input must be email";
        }
        return $this;  
    }




    public function float(){
        $regex = '/^('.$this->pattern['float'].')$/u';

        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : $this->input must be float";
        }
        return $this;  
    }


    public function string(){
        $regex = '/^('.$this->pattern['words'].')$/u';

        if(!preg_match($regex,$this->value)){
            $this->errors[] = "input : $this->input must be string";
        }
        return $this;  
    }


    public function showErorr(){
        if(!empty($this->errors)){
            echo "<ul>";
            foreach($this->errors as $error){
                echo "<li style='color:red'>$error</li>";
            }   
            echo "</ul>";
        }
    }

    public function success(){
        return (empty($this->errors)) ?  true :  false;
    }
}