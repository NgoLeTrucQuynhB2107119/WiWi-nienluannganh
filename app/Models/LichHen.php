<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LichHen extends Model {
    protected $table = 'LICH_HEN';
    protected $primaryKey = 'LH_MA';
    public $timestamps = true;

    protected $fillable = ['LH_NGAYGIO', 'TTLH_MA', 'KH_MA', 'NV_MA', 'DV_MA'];

    public function trangThai() {
        return $this->belongsTo(TrangThai::class, 'TTLH_MA');
    }

    public function khachHang() {
        return $this->belongsTo(KhachHang::class, 'KH_MA');
    }

    public function nhanVien() {
        return $this->belongsTo(NhanVien::class, 'NV_MA');
    }

    public function dichVu() {
        return $this->belongsTo(DichVu::class, 'DV_MA');
    }
}