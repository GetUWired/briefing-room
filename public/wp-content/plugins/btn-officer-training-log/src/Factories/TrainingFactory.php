<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Training;

class TrainingFactory extends AbstractFactory
{
    protected string $modelClass = Training::class;

    public function definition()
    {
        return [
            'post_title' => $this->faker->sentence(),
            'post_status'   => 'publish',
            'post_type'     => 'btnbf_training',
        ];
    }

    public static function make(array $attributes = [])
    {
        $factory = new static();

        return new $factory->modelClass(0, new \WP_Post(
            (object) array_map(function($value) {
                return $value instanceof Closure ? $value() : $value;
            }, array_merge($factory->definition(), $attributes))
        ));
    }

    public static function create(array $attributes = [])
    {
        $model = static::make($attributes);
        $model->id = wp_insert_post($model->getPost());
        return $model;
    }

}
