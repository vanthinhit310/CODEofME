<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'pjone_user_template';
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing=false;
}
