<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model{
    protected $fillable = [
        'user_id','type' ,'number', 'state','amount','currency','period','until'
    ];
    protected $table = 'services';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
