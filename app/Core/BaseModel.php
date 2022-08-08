<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Retorna uma nova instancia da classe chamada
     * 
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function new() {
        $class = get_called_class();
        return new $class;
    }
}
