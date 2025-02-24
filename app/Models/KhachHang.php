<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model {
    protected $table = 'KHACH_HANG';
    protected $primaryKey = 'KH_MA';
    public $timestamps = true;

    protected $fillable = ['KH_EMAIL', 'KH_HOTEN', 'KH_GIOITINH', 'KH_SDT', 'KH_DIACHI'];

    public function thuCungs() {
        return $this->hasMany(ThuCung::class, 'KH_MA');
    }

    public function lichHens() {
        return $this->hasMany(LichHen::class, 'KH_MA');
    }
}