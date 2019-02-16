<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbBaiViet extends Model
{
    protected $table = 'tbbaiviet';
    public $timestamps = false;
    protected $primaryKey = 'mabv';
    public $incrementing=false;

    public function getLoai(){
        return $this->belongsTo('App\TbLoaiBaiViet','maloaibv');
    }
}
