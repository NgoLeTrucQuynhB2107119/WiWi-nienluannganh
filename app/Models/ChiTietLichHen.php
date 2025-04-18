<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ChiTietLichHen extends Model
{
    protected $table = 'chi_tiet_lich_hens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'LH_MA',
        'DV_MA',
        'GIA',
    ];

    public function lichHen()
    {
        return $this->belongsTo(LichHen::class, 'LH_MA', 'LH_MA');
    }

    public function dichVu()
    {
        return $this->belongsTo(DichVu::class, 'DV_MA', 'DV_MA');
    }
}
