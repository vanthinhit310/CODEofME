<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PjoneUser extends Model
{
    protected $table = 'pjone_user';
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing=false;
}
