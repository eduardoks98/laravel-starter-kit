<?php

namespace App\Models;

use App\Core\BaseModel;

class Permission extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'slug',
    ];

   
}
