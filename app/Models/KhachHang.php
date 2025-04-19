<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class KhachHang extends Authenticatable
{
    protected $table = 'khach_hangs';
    protected $primaryKey = 'KH_MA';
    public $timestamps = true;

    protected $fillable = [
        'KH_EMAIL','KH_MATKHAU', 'KH_HOTEN', 'KH_GIOITINH', 'KH_SDT', 'KH_DIACHI'
    ];

    protected $hidden = [
        'KH_MATKHAU'
    ];
    public function getAuthIdentifierName()
    {
        return 'KH_MA';
    }

    public function getAuthPassword()
    {
        return $this->KH_MATKHAU;
    }

    public function lichHens()
    {
        return $this->hasMany(LichHen::class, 'KH_MA', 'KH_MA');
    }

    public function danhGias()
    {
        return $this->hasMany(DanhGia::class, 'KH_MA', 'KH_MA');
    }

}
