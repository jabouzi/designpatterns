<?php

trait IsEntity{
    protected $id;

    public getId(){
        return $this->id;
    }
}

class Person{
    use IsEntity;

    private $name;

    public getName(){
        return $this->name;
    }
}

class Car{
    use IsEntity;

    private $model;

    public getModel(){
        return $this->model;
    }
}
