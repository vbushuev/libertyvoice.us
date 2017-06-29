<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model{
    protected $fillable = ['user_id', 'amount', 'currency','type','message'];
    protected $table = 'payments';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;
}
