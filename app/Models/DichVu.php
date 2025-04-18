<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = 'dich_vus';
    protected $primaryKey = 'DV_MA';
    public $timestamps = true;

    protected $fillable = [
        'DV_TEN', 'DV_MOTA', 'DV_GIA', 'LDV_MA'
    ];

    public function loaiDichVu()
    {
        return $this->belongsTo(LoaiDichVu::class, 'LDV_MA', 'LDV_MA');
    }

    public function lichHens()
    {
        return $this->belongsToMany(LichHen::class, 'chi_tiet_lich_hens', 'DV_MA', 'LH_MA')
                ->withPivot('GIA');
    }
    public function chiTietLichHen()
    {
        return $this->hasMany(ChiTietLichHen::class, 'LH_MA', 'LH_MA');
    }
}
