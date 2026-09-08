<?php

namespace BTN\BriefingRoom\Framework;

/**
 * @method static find($id)
 * @method static exists($id)
 */
trait ORM
{
    abstract public static function getTable(): string;

    /**
     * Forward static calls to the configured repository
     */
    public static function __callStatic($method, $args)
    {
        $repository = new Repository(static::getTable(), static::class);
        return $repository->$method(...$args);
    }

    /**
     * A fluent wrapper for the repository's "save" method
     */
    public function save()
    {
        $repository = new Repository(static::getTable(), static::class);
        $repository->save($this);
    }

    /**
     * A fluent wrapper for the repository's "delete" method
     */
    public function delete(): bool
    {
        $repository = new Repository(static::getTable(), static::class);
        return $repository->delete($this);
    }
}
