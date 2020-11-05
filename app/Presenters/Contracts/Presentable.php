<?php


namespace App\Presenters\Contracts;


trait Presentable
{

    protected $presenterInstance;

    public function present()
    {

        if (!$this->presenter || !class_exists($this->presenter)) {
            throw new \Exception('presenter class not found for ' . static::class . " Class");
        }

        if(!$this->presenterInstance){
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }

}
