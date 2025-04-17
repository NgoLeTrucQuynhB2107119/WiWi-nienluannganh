<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    protected $table = 'danh_gias';
    protected $primaryKey = 'DG_MA';
    public $timestamps = true;

    protected $fillable = [
        'DG_DIEMSO', 'DG_BINHLUAN', 'KH_MA'
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KH_MA', 'KH_MA');
    }

}
