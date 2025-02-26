<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiDichVu extends Model
{
    protected $table = 'loai_dich_vus';
    protected $primaryKey = 'LDV_MA';
    public $timestamps = true;

    protected $fillable = [
        'LDV_TEN', 'LDV_MOTA'
    ];

    public function dichVus()
    {
        return $this->hasMany(DichVu::class, 'LDV_MA', 'LDV_MA');
    }
}