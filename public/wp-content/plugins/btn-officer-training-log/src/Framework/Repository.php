<?php

namespace BTN\BriefingRoom\Framework;

use BTN\BriefingRoom\Framework\Exceptions\NotFound;

class Repository
{
    protected $table;
    protected $modelClass;

    public function __construct(string $table, string $modelClass)
    {
        $this->table = DB::prefix($table);
        $this->modelClass = $modelClass;
    }

    public function all()
    {
        return Collection::of(
            $this->modelClass,
            DB::get_results("SELECT * FROM $this->table")
        );
    }

    public function paginate($page = 1, $perPage = 20)
    {
        $offset = ($page - 1) * $perPage;
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM $this->table LIMIT %d, %d", $offset, $perPage)
            )
        );
    }

    public function paginateWhere($column, $value, $page = 1, $perPage = 20)
    {
        $offset = ($page - 1) * $perPage;
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM $this->table WHERE $column = %s LIMIT %d, %d", $value, $offset, $perPage)
            )
        );
    }

    public function betweenWhere($column, $start, $end, $whereColumn, $whereValue)
    {
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM $this->table WHERE $whereColumn = %s AND $column BETWEEN %s AND %s", $whereValue, $start, $end, $offset, $perPage)
            )
        );
    }

    public function find($id)
    {
        $data = DB::get_row(
            DB::prepare("SELECT * FROM {$this->table} WHERE id = %d", $id)
        );

        if(!$data) {
            throw new NotFound("Model ($this->modelClass) not found with ID $id");
        }

        return call_user_func([$this->modelClass, 'fromObject'], $data);
    }

    public function exists($id): bool
    {
        return (bool) DB::get_row(
            DB::prepare("SELECT * FROM {$this->table} WHERE id = %d", $id)
        );
    }

    public function where($column, $value)
    {
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM {$this->table} WHERE LOWER($column) LIKE LOWER(%s)", $value)
            ) ?? []
        );
    }

    public function whereLike($column, $value)
    {
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM {$this->table} WHERE LOWER($column) LIKE LOWER(%s)", "%$value%")
            ) ?? []
        );
    }

    public function whereMonth($column, $month)
    {
        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare("SELECT * FROM {$this->table} WHERE MONTH($column) = %d", $month)
            ) ?? []
        );
    }

    public function search($value)
    {
        $query = "SELECT * FROM {$this->table} WHERE ";
        $params = [];
        $columns = array_keys(get_class_vars($this->modelClass));
        foreach ($columns as $column) {
            $params[] = "LOWER(`$column`) LIKE %s";
        }
        $query .= implode(' OR ', $params);

        return Collection::of(
            $this->modelClass,
            DB::get_results(
                DB::prepare($query, array_fill(0, count($columns), '%'.strtolower($value).'%'))
            ) ?? []
        );
    }

    public function count()
    {
        return DB::get_var("SELECT COUNT(*) FROM {$this->table}");
    }

    public function countWhere($column, $value)
    {
        return DB::get_var(
            DB::prepare("SELECT COUNT(*) FROM {$this->table} WHERE $column = %s", $value)
        );
    }

    public function save(Model $model)
    {
        if ($model->id) {
            DB::update("{$this->table}", $model->toArray(), ['id' => $model->id]);
        } else {
            DB::insert("{$this->table}", $model->toArray());
            $model->id = DB::insert_id();
        }
    }

    public function create(array $data)
    {
        $model = new $this->modelClass($data);
        $this->save($model);
        return $model;
    }

    public function delete(Model $model): bool
    {
        /**
         * @link https://developer.wordpress.org/reference/classes/wpdb/delete/
         * @return int|false The number of rows deleted, or false on error.
         */
        return (bool) DB::delete("{$this->table}", ['id' => $model->id]);
    }
}
