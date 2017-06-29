<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model{
    protected $fillable = [
        'user_id', 'number', 'state','amount','currency','until'
    ];
    protected $table = 'numbers';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
