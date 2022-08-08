<?php

namespace App\Models;

use App\Core\BaseModel;

class UserRouteTracker extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'route',
        'method',
    ];
}
