<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiThuCung extends Model
{
    protected $table = 'loai_thu_cungs';
    protected $primaryKey = 'LTC_MA';
    public $timestamps = true;

    protected $fillable = [
        'LTC_TEN'
    ];
}