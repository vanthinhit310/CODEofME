<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGoogle extends Model
{
    protected $table = 'usersgg';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing=false;
}
