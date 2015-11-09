<?php
namespace App\Repository;
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 07/11/2015
 * Time: 16:56
 */
abstract class BaseRepository
{

    abstract public function  getModel();


    public function newQuery(){
        return  $this->getModel()->newQuery();
    }
    public function find($id){

        return $this->newQuery()->find($id);

    }
    public function getAllModel(){
        return $this->getModel()->all();

    }
    public function DatosRelacion($tabla){
        return $this->getModel()->with([$tabla]);
    }
}