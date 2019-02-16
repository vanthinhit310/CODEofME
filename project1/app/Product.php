<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'pjone_product';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing=false;

    public function listComment()
    {
        return $this->hasMany('App\Comment', 'macm');
    }
}
