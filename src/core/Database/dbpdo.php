<?php
namespace Itrax\Mvc\core\Database;

use Itrax\Mvc\core\Database\contract\IDbstanderd;

class dbpdo implements IDbstanderd{
    public $connnection;
    public $query;
    public $sql;

    public function __construct()
    {
        $this->connnection = mysqli_connect("localhost","root","","cms");
    }

    public function select($table,$column){
        $this->sql = "SELECT $column FROM `$table` ";
        return $this;
    }

    public function where($column,$compair,$value){
        $this->sql .= " WHERE $column $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value){
        $this->sql .= " AND  `$column` $compair '$value'";
        return $this;
    }

    public function orWhere($column,$compair,$value){
        $this->sql .= " OR  `$column` $compair '$value'";
        return $this;
    }

    public function join($tablename,$first,$second){
        $this->sql .=  " INNER JOIN $tablename ON $first = $second"; 
        return $this;
    }

    public function getAll(){
        
        $this->query();
        while($row = mysqli_fetch_assoc($this->query)){
            $data[] = $row;
        }
        return $data;
    }

    public function getRow(){
          $this->query();
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function insert($table,$data){
        
        $row = $this->preparData($data);
        $this->sql = "INSERT INTO `$table` SET $row";
        // echo $this->sql;die;
        return $this;
    }

    public function update($table,$data){
    
        $row = $this->preparData($data);
        $this->sql = "UPDATE `$table` SET $row";
        return $this;
    }

    public function delete($table){
        $this->sql = "DELETE FROM `$table` ";
        return $this;
    }

    public function excute(){
        $this->query();
        if(mysqli_affected_rows($this->connnection) > 0){
            return true;
        }else{
            return $this->showError();
        }
    }

    public function preparData($data){
        // print_r($data);die;
        $row = "";
        foreach($data as $key => $value){
            $row .= " `$key` = ".((gettype($value) == 'string') ? "'$value'" : "$value").",";
        }
        $row = rtrim($row,",");
        // echo $row;die;
        return  $row;
    }


    public function query(){
        // echo $this->sql;die;
        $this->query =  mysqli_query($this->connnection,$this->sql);
    }

    public function showError(){
    //   return  mysqli_error($this->connnection);
      $errors = mysqli_error_list($this->connnection);
      foreach($errors as $error){
          echo "<h2 style='color:red'>Error</h2> : ".$error['error']."<br> <h3 style='color:red'>Error Code : </h3>".$error['errno'];
      }
    }   
    public function __destruct()
    {
        mysqli_close($this->connnection);
    }
}