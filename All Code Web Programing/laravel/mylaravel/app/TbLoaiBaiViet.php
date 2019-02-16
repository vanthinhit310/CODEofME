<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbLoaiBaiViet extends Model
{
    protected $table = 'tbloaibv';
    public $timestamps = false;
    protected $primaryKey = 'maloaibv';
    public $incrementing = false;

    public function listBaiViet()
    {
        return $this->hasMany('App\TbBaiViet', 'maloaibv');
    }
}
