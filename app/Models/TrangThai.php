<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrangThai extends Model
{
    protected $table = 'TRANG_THAI_LICH_HEN';
    protected $primaryKey = 'TTLH_MA';
    public $timestamps = true;

    protected $fillable = [
        'TTLH_TEN',
        'TTLH_MOTA',
    ];
}
