<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
    protected $primaryKey = 'KH_MA';
    public $timestamps = true;

    protected $fillable = [
        'KH_EMAIL', 'KH_HOTEN', 'KH_GIOITINH', 'KH_SDT', 'KH_DIACHI'
    ];

    public function lichHens()
    {
        return $this->hasMany(LichHen::class, 'KH_MA', 'KH_MA');
    }

    public function danhGias()
    {
        return $this->hasMany(DanhGia::class, 'KH_MA', 'KH_MA');
    }

}