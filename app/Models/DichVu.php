<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model {
    protected $table = 'DICH_VU';
    protected $primaryKey = 'DV_MA';
    public $timestamps = true;

    protected $fillable = ['DV_TEN', 'DV_MOTA', 'DV_GIA', 'DV_THOIGIAN_THUCHIEN', 'LDV_MA'];

    public function loaiDichVu() {
        return $this->belongsTo(LoaiDichVu::class, 'LDV_MA');
    }

    public function lichHens() {
        return $this->hasMany(LichHen::class, 'DV_MA');
    }

    public function danhGias() {
        return $this->hasMany(DanhGia::class, 'DV_MA');
    }
}