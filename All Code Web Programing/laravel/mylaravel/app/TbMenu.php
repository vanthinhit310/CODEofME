<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMenu extends Model
{
    protected $table = 'tbmenu';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing=false;
}
