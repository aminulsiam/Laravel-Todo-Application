<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
     protected $table = 'todos';
    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'name',
        'user_id',
    ];
}
