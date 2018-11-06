<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    // allowed statuses for project
    private static $statuses = [
        'planned',
        'running',
        'on hold',
        'finished',
        'cancel'
    ];

    // return allowed statuses
    public static function getStatuses()
    {
        return self::$statuses;
    }

    protected $table = 'projects';
}
