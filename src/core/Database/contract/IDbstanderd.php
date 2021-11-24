<?php
namespace Itrax\Mvc\core\Database\contract;





interface IDbstanderd
{
    public function select($table,$column);

    public function where($column,$compair,$value);

    public function andWhere($column,$compair,$value);

    public function orWhere($column,$compair,$value);

    public function join($tablename,$first,$second);


    public function getAll();

    public function getRow();

    public function insert($table,$data);


    public function update($table,$data);

    public function delete($table);

    public function excute();

    public function preparData($data);

    public function query();

    public function showError();

    
}