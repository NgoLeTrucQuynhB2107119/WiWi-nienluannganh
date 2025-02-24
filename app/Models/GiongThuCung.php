<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiongThuCung extends Model
{
    protected $table = 'GIONG_THU_CUNG';
    protected $primaryKey = 'GTC_MA';
    public $timestamps = true;

    protected $fillable = [
        'GTC_TEN',
        'GTC_MOTA',
        'LTC_MA',
    ];

    // Quan hệ với Loài Thú Cưng
    public function loaiThuCung()
    {
        return $this->belongsTo(LoaiThuCung::class, 'LTC_MA', 'LTC_MA');
    }
}