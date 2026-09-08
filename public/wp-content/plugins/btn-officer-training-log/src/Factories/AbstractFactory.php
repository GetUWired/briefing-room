<?php

namespace BTN\BriefingRoom\Factories;

use Closure;
use Faker\Factory;
use Faker\Generator;

abstract class AbstractFactory
{
    protected Generator $faker;

    protected string $modelClass;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    abstract public function definition();

    public static function make(array $attributes = [])
    {
        $factory = new static();
        return new $factory->modelClass(array_map(function($value) {
            return $value instanceof Closure ? $value() : $value;
        }, array_merge($factory->definition(), $attributes)));
    }

    public static function create(array $attributes = [])
    {
        $model = static::make($attributes);
        $model->save();
        return $model;
    }
}
