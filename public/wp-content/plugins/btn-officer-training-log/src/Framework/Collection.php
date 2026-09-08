<?php

namespace BTN\BriefingRoom\Framework;

class Collection
{
    public array $models;

    /**
     * @param Model[]|UserModel[] $models
     */
    public function __construct(array $models)
    {
        $this->models = $models;
    }

    public function count(): int
    {
        return count($this->models);
    }

    public function first()
    {
        return reset($this->models);
    }

    public function last()
    {
        return end($this->models);
    }

    public function sum(string $property): int
    {
        return array_sum(array_map(function($model) use ($property) {
            return $model->$property;
        }, $this->models));
    }

    public function map(callable $callback): Collection
    {
        return new Collection(array_map($callback, $this->models));
    }

    public function filter(callable $callback): Collection
    {
        return new Collection(array_filter($this->models, $callback));
    }

    public function intersect(Collection $collection, string $property): Collection
    {
        $ids = array_map(function($model) use ($property) {
            return $model->$property;
        }, $collection->models);

        return $this->filter(function($model) use ($ids) {
            return in_array($model->id, $ids);
        });
    }

    public function diff(Collection $collection): Collection
    {
        $ids = array_map(function($model) {
            return $model->id;
        }, $collection->models);

        return $this->filter(function($model) use ($ids) {
            return !in_array($model->id, $ids);
        });
    }

    public static function of(string $class, array $modelData)
    {
        return new Collection(array_map(function($data) use ($class) {
            return is_array($data)
                ? new $class($data)
                : call_user_func([$class, 'fromObject'], $data);
        }, $modelData));
    }

    public function toJSON()
    {
        return json_encode($this->models, JSON_HEX_APOS);
    }

    public function alphabetical(string ...$properties): Collection
    {
        $models = $this->models;
        usort($models, function($a, $b) use ($properties) {
            foreach($properties as $property) {
                $comparison = strcmp($a->$property, $b->$property);
                if($comparison !== 0) {
                    return $comparison;
                }
            }
            return 0;
        });
        return new Collection($models);
    }
}
