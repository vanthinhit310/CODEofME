<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbAccount extends Model
{
    protected $table = 'tbaccount';
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing=false;
}
