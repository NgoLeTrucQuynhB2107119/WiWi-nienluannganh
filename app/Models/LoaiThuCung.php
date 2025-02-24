<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiThuCung extends Model
{
    protected $table = 'LOAI_THU_CUNG';
    protected $primaryKey = 'LTC_MA';
    public $timestamps = true;

    protected $fillable = [
        'LTC_TEN',
        'LTC_MOTA',
    ];

    // Quan hệ với Giống Thú Cưng
    public function giongThuCung()
    {
        return $this->hasMany(GiongThuCung::class, 'LTC_MA', 'LTC_MA');
    }
}