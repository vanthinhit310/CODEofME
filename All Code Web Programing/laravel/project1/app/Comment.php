<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'pjone_comment';
    public $timestamps = false;
    protected $primaryKey = 'macm';
    public $incrementing=false;

    public function getProduct(){
        return $this->belongsTo('App\Product','macm');
    }
}
