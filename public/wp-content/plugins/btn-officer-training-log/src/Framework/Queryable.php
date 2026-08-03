<?php

namespace BTN\BriefingRoom\Framework;

trait Queryable
{
    public static function query(){
        return \StellarWP\DB\DB::table(
            self::getTable(),
            strtolower(
                (new \ReflectionClass(self::class))->getShortName()
            )
        );
    }
}
