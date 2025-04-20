<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LichHen extends Model
{
    protected $table = 'lich_hens';
    protected $primaryKey = 'LH_MA';
    public $timestamps = true;

    protected $fillable = [
        'LH_NGAYHEN','LH_GIOHEN','LH_DIACHI','LH_TONGTIEN', 'TTLH_MA', 'KH_MA', 'NV_MA', 'HT_MA', 'LTC_MA'
    ];

    public function trangThaiLichHen()
    {
        return $this->belongsTo(TrangThaiLichHen::class, 'TTLH_MA', 'TTLH_MA');
    }

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KH_MA', 'KH_MA');
    }

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'NV_MA', 'NV_MA');
    }

    public function dichVu()
    {
        return $this->belongsToMany(DichVu::class, 'chi_tiet_lich_hens', 'LH_MA', 'DV_MA')
        ->withPivot('GIA');
    }
    public function hinhThuc()
    {
        return $this->belongsTo(HinhThuc::class, 'HT_MA','HT_MA');
    }
    public function loaiThuCung(){
        return $this->belongsTo(LoaiThuCung::class,'LTC_MA','LTC_MA');
    }
    public function chiTietLichHen()
    {
        return $this->hasMany(ChiTietLichHen::class, 'LH_MA', 'LH_MA');
    }
}