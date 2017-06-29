<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model{
    protected $fillable = [
        'user_id', 'name', 'value','type'
    ];
    protected $table = 'userdata';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
