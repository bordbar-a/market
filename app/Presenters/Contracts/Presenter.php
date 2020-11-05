<?php


namespace App\Presenters\Contracts;


use Illuminate\Database\Eloquent\Model;

abstract class Presenter
{
    public $entity;


    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }


    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        if(!isset($this->entity->{$property})){
            throw new \Exception($property . ' Not Found In ' . static::class . ' Presenter');
        }
        return $this->entity->{$property};

    }

}
