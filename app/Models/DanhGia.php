<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model {
    protected $table = 'DANH_GIA';
    protected $primaryKey = 'DG_MA';
    public $timestamps = true;

    protected $fillable = ['DG_DIEMSO', 'DG_BINHLUAN', 'KH_MA', 'DV_MA'];

    public function khachHang() {
        return $this->belongsTo(KhachHang::class, 'KH_MA');
    }

    public function dichVu() {
        return $this->belongsTo(DichVu::class, 'DV_MA');
    }
}