<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model {
    protected $table = 'NHAN_VIEN';
    protected $primaryKey = 'NV_MA';
    public $timestamps = true;

    protected $fillable = ['NV_EMAIL', 'NV_HOTEN', 'NV_GIOITINH', 'NV_SDT', 'NV_ANHDAIDIEN', 'CV_MA'];

    public function chucVu() {
        return $this->belongsTo(ChucVu::class, 'CV_MA');
    }

    public function lichHens() {
        return $this->hasMany(LichHen::class, 'NV_MA');
    }
}