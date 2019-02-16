<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'user_table';
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing=false;
}
