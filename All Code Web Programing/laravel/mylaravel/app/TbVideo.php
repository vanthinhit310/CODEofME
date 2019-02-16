<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbVideo extends Model
{
    protected $table = 'tbvideo';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing=false;
}
