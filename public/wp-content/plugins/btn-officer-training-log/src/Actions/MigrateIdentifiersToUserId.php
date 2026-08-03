<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use wpdb;

class MigrateIdentifiersToUserId
{
    public function __construct(
        protected wpdb $db,
    ){}

    /**
     * @throws \Exception
     */
    public function migrate(string $table, string $relationalColumn, Officer|Sergeant|Manager $model)
    {
        /**
         * Returns false if errors, or the number of rows affected if successful.
         * @return false|int
         */
        $updated = $this->db->update(
            $this->prefix($table),
            ['userId' => $model->userId],
            [$relationalColumn => $model->id]
        );

        if(false === $updated) {
            $class = get_class($model);
            throw new \Exception("Error migrating identifiers for $class with ID $model->id");
        }
    }

    protected function prefix(string $table): string
    {
        return $this->db->prefix . $table;
    }
}
