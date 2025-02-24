<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThuCung extends Model {
    protected $table = 'THU_CUNG';
    protected $primaryKey = 'TC_MA';
    public $timestamps = true;

    protected $fillable = ['TC_TEN', 'TC_NGAYSINH', 'TC_CANNANG', 'TC_TINHTRANG_SUC_KHOE', 'TC_ANHDAIDIEN', 'KH_MA', 'GTC_MA'];

    public function khachHang() {
        return $this->belongsTo(KhachHang::class, 'KH_MA');
    }

    public function giongThuCung() {
        return $this->belongsTo(GiongThuCung::class, 'GTC_MA');
    }
}