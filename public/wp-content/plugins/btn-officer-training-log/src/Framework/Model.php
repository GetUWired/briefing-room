<?php

namespace BTN\BriefingRoom\Framework;

use Closure;

abstract class Model
{
    public function __construct($data = [])
    {
        foreach($this->getModelProperties() as $property => $value) {
            if(isset($data[$property])) {
                $this->$property = $data[$property];
            }
        }
    }

    protected function getModelProperties(): array
    {
        return get_class_vars(get_class($this));
    }

    public function toArray()
    {
        return get_object_vars($this);
    }

    public static function make($data = []): Model
    {
        return new static($data);
    }

    public static function fromObject($object): Model
    {
        return new static(get_object_vars($object));
    }

    public function tap(Closure $closure): Model
    {
        $closure($this);
        return $this;
    }
}
