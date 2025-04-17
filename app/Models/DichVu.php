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
        return $this->hasMany(LichHen::class, 'DV_MA', 'DV_MA');
    }

}