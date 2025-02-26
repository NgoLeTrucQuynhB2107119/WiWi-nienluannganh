<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrangThaiLichHen extends Model
{
    protected $table = 'trang_thai_lich_hens';
    protected $primaryKey = 'TTLH_MA';
    public $timestamps = false;

    protected $fillable = [
        'TTLH_TEN'
    ];

    public function lichHens()
    {
        return $this->hasMany(LichHen::class, 'TTLH_MA', 'TTLH_MA');
    }
}