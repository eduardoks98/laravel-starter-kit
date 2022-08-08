<?php

namespace App\Models;

use App\Core\BaseModel;

class RolePermission extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_role',
        'id_permission',
    ];

}
